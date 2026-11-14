<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('deskripsiSingkat')
                    ->label('Deskripsi Singkat')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('visi')
                    ->label('Visi')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('misi')
                    ->label('Misi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
