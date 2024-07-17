<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OpenGraphResource\Pages;
use App\Filament\Resources\OpenGaphResource\RelationManagers;
use App\Models\OpenGraph;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class OpenGraphResource extends Resource
{
    protected static ?string $model = OpenGraph::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('url')->require(),
                TextInput::make('og_type'),
                TextInput::make('og_title'),
                TextInput::make('og_url'),
                TextInput::make('og_image'),
                TextInput::make('og_description'),
                TextInput::make('og_plural_title'),
               


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('url')->sortable(),
                TextColumn::make('og_title')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListOpenGraphs::route('/'),
            'create' => Pages\CreateOpenGraph::route('/create'),
            'edit' => Pages\EditOpenGraph::route('/{record}/edit'),
        ];
    }    
}