<?php

namespace App\Filament\Resources\ArticleNews\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ArticleNewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Judul')
                    ->required(),
                TextInput::make('subjudul')
                    ->label('Sub Judul')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category','name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('is_featured')
                    ->options(['featured' => 'Featured', 'not_featured' => 'Not featured'])
                    ->default('featured')
                    ->required(),                                
                FileUpload::make('thumbnail')
                    ->required()
                    ->image()
                    ->disk('public')
                    ->directory('news-thumbnails')
                    ->columnSpanFull(),                                               
                RichEditor::make('content')
                    ->label("Isi Berita")
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes([
                        'style' => 'min-height: 300px;',
                    ])
                    ->toolbarButtons([
                        ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                        ['h2', 'h3'],
                        ['alignStart', 'alignCenter', 'alignEnd'],
                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                        ['table', 'attachFiles'], // The `customBlocks` and `mergeTags` tools are also added here if those features are used.
                        ['undo', 'redo'],
                    ]),                
            ]);
    }
}
