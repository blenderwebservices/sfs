<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AiAgentResource\Pages;
use App\Models\AiAgent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AiAgentResource extends Resource
{
    protected static ?string $model = AiAgent::class;

    protected static ?string $navigationIcon = 'heroicon-o-cpu-chip';

    protected static ?string $navigationGroup = 'Contenido';

    protected static ?string $label = 'Agente de IA';
    protected static ?string $pluralLabel = 'Agentes de IA';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre del Agente')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('model')
                            ->label('Modelo LLM')
                            ->placeholder('Ej. gemini-1.5-flash, gpt-4o')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('provider')
                            ->label('Proveedor')
                            ->placeholder('Ej. Google, OpenAI, Anthropic')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('temperature')
                            ->label('Temperatura')
                            ->numeric()
                            ->step(0.1)
                            ->default(0.7)
                            ->required(),
                        Forms\Components\TextInput::make('avatar')
                            ->label('Icono de Avatar (Clase FontAwesome)')
                            ->placeholder('Ej. fa-solid fa-graduation-cap, fa-solid fa-robot')
                            ->maxLength(255),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true)
                            ->required(),
                        Forms\Components\Textarea::make('description')
                            ->label('Descripción corta')
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('system_prompt')
                            ->label('Instrucciones / System Prompt')
                            ->required()
                            ->rows(8)
                            ->columnSpanFull(),
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('model')
                    ->label('Modelo')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provider')
                    ->label('Proveedor')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('temperature')
                    ->label('Temp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Activo')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\ToggledFilter::make('is_active')
                    ->label('Solo Activos'),
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
            'index' => Pages\ListAiAgents::route('/'),
            'create' => Pages\CreateAiAgent::route('/create'),
            'edit' => Pages\EditAiAgent::route('/{record}/edit'),
        ];
    }
}
