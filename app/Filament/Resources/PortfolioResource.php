<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Contenido';

    protected static ?string $label = 'Aplicación / Portafolio';
    protected static ?string $pluralLabel = 'Portafolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Título de la Aplicación')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('category')
                            ->label('Categoría')
                            ->placeholder('Ej. MATEMÁTICA APLICADA')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->label('Descripción')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\TagsInput::make('tags')
                            ->label('Etiquetas / Tecnologías')
                            ->placeholder('Agregar etiqueta')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('version')
                            ->label('Versión')
                            ->placeholder('Ej. Versión 1.2 Disponible')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('link')
                            ->label('Enlace (URL)')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('icon')
                            ->label('Icono / Texto Corto')
                            ->placeholder('Ej. 2x2, JN o clase FontAwesome')
                            ->maxLength(255),
                        Forms\Components\Select::make('color_theme')
                            ->label('Tema de Color')
                            ->options([
                                'brand-accent' => 'Neo-Turquesa (Accent)',
                                'brand-warm' => 'Neo-Naranja (Warm)',
                            ])
                            ->default('brand-accent')
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true)
                            ->required(),
                        Forms\Components\TextInput::make('order')
                            ->label('Orden de visualización')
                            ->numeric()
                            ->default(0)
                            ->required(),
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->label('Categoría')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('version')
                    ->label('Versión')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Activo')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('order')
                    ->label('Orden')
                    ->numeric()
                    ->sortable(),
            ])
            ->defaultSort('order', 'asc')
            ->filters([
                Tables\Filters\Filter::make('is_active')
                    ->label('Solo Activos')
                    ->toggle()
                    ->query(fn ($query) => $query->where('is_active', true)),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
