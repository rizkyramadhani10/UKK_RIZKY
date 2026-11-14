<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sender_name')
                    ->hidden()
                    ->required(),
                TextInput::make('sender_email')
                    ->email()
                    ->hidden()
                    ->required(),
                TextInput::make('service')
                    ->hidden()
                    ->required(),
                Textarea::make('address')
                    ->hidden()
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->options([
                        'Disetujui' => 'Disetujui',
                        'Ditolak' => 'Ditolak',
                        'Selesai' => 'Selesai',
                    ])
                    ->required()
            ]);
    }
}
