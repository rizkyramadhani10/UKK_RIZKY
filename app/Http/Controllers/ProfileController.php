<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $deskripsiSingkat = Profile::get(['deskripsiSingkat']);
        $visi = Profile::get(['visi']);
        $misi = Profile::get(['misi']);

        return view('pages.profile', compact('deskripsiSingkat', 'visi', 'misi'));
    }

    public function show() {
        return view('pages.profile');
    }
}
