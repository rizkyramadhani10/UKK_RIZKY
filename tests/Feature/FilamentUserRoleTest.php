<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FilamentUserRoleTest extends TestCase
{
    use RefreshDatabase;

    public function test_filament_user_command_creates_an_admin_who_can_access_the_panel(): void
    {
        $this->artisan('make:filament-user', [
            '--name' => 'Filament Admin',
            '--email' => 'filament-admin@example.test',
            '--password' => 'password123',
            '--panel' => 'admin',
        ])->assertExitCode(0);

        $user = User::where('email', 'filament-admin@example.test')->firstOrFail();

        $this->assertSame('admin', $user->role);
        $this->actingAs($user, 'admin')
            ->get('/admin')
            ->assertOk();
    }

    public function test_public_registration_ignores_a_submitted_admin_role(): void
    {
        $this->post('/register', [
            'name' => 'New Customer',
            'email' => 'new-customer@example.test',
            'password' => 'password123',
            'role' => 'admin',
        ])->assertRedirect(route('home'));

        $this->assertDatabaseHas('users', [
            'email' => 'new-customer@example.test',
            'role' => 'customer',
        ]);
    }

    public function test_customer_cannot_access_the_filament_panel(): void
    {
        $customer = User::create([
            'name' => 'Existing Customer',
            'email' => 'existing-customer@example.test',
            'password' => 'password123',
            'role' => 'customer',
        ]);

        $this->actingAs($customer, 'admin')
            ->get('/admin')
            ->assertForbidden();
    }
}
