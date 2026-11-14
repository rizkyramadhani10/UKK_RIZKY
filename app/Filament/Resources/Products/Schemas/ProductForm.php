<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->required()
                    ->options(Category::query()->latest()->pluck('name', 'id'))
                    ->label('Kategori'),
                TextInput::make('name')
                    ->required()
                    ->label('Nama Layanan'),
                TextInput::make('slug')
                    ->required()
                    ->label('Slug'),
                TextInput::make('price')
                    ->required()
                    ->label('Biaya'),
                Textarea::make('description')
                    ->required()
                    ->label('Deskripsi Layanan')
                    ->columnSpanFull(),
                FileUpload::make('image_url')
                    ->required()
                    ->label('Gambar Produk')
                    ->image()
                    ->disk('public')
                    ->directory('products')
            ]);
    }
}
