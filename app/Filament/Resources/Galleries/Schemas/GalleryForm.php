<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->label('Judul Kegiatan'),
                FileUpload::make('image_path')
                    ->required()
                    ->image()
                    ->label('Gambar Kegiatan')
                    ->disk('public')
                    ->directory('galleries'),
                Textarea::make('caption')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
