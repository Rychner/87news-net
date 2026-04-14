<?php

namespace App\Filament\Resources\ArticleNews;

use App\Filament\Resources\ArticleNews\Pages\CreateArticleNews;
use App\Filament\Resources\ArticleNews\Pages\EditArticleNews;
use App\Filament\Resources\ArticleNews\Pages\ListArticleNews;
use App\Filament\Resources\ArticleNews\Schemas\ArticleNewsForm;
use App\Filament\Resources\ArticleNews\Tables\ArticleNewsTable;
use App\Models\ArticleNews;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ArticleNewsResource extends Resource
{
    protected static ?string $model = ArticleNews::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'ArticleNews';

    public static function form(Schema $schema): Schema
    {
        return ArticleNewsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ArticleNewsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListArticleNews::route('/'),
            'create' => CreateArticleNews::route('/create'),
            'edit' => EditArticleNews::route('/{record}/edit'),
        ];
    }
}
