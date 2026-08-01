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
                        Forms\Components\RichEditor::make('privacy_policy')
                            ->label('Política de Privacidad')
                            ->columnSpanFull()
                            ->hintAction(
                                Forms\Components\Actions\Action::make('generate_privacy')
                                    ->label('Generar con IA')
                                    ->icon('heroicon-m-sparkles')
                                    ->action(function (Forms\Get $get, Forms\Set $set) {
                                        self::generateAiText('privacy', $get, $set);
                                    })
                            ),
                        Forms\Components\RichEditor::make('terms_and_conditions')
                            ->label('Términos y Condiciones')
                            ->columnSpanFull()
                            ->hintAction(
                                Forms\Components\Actions\Action::make('generate_terms')
                                    ->label('Generar con IA')
                                    ->icon('heroicon-m-sparkles')
                                    ->action(function (Forms\Get $get, Forms\Set $set) {
                                        self::generateAiText('terms', $get, $set);
                                    })
                            ),
                    ])->columns(2)
            ]);
    }

    private static function generateAiText(string $type, Forms\Get $get, Forms\Set $set): void
    {
        $apiKey = env('APP_APIKEY_AI');
        if (!$apiKey) {
            \Filament\Notifications\Notification::make()->danger()->title('API Key faltante')->body('Configura APP_APIKEY_AI en el archivo .env')->send();
            return;
        }

        $title = $get('title');
        $category = $get('category');
        $description = $get('description');

        if (!$title || !$description) {
            \Filament\Notifications\Notification::make()->warning()->title('Faltan datos')->body('Ingresa título y descripción para que la IA tenga contexto.')->send();
            return;
        }

        $tipoDoc = $type === 'privacy' ? 'una Política de Privacidad' : 'unos Términos y Condiciones';
        $prompt = "Escribe {$tipoDoc} en formato HTML (solo el contenido útil, usando h2, h3, p, ul. Sin html, head o body) para un producto digital/aplicación llamada '{$title}' de la categoría '{$category}'. Descripción de la aplicación: {$description}.";

        try {
            if (str_starts_with($apiKey, 'sk-')) {
                // OpenAI
                $response = \Illuminate\Support\Facades\Http::withToken($apiKey)
                    ->timeout(30)
                    ->post('https://api.openai.com/v1/chat/completions', [
                        'model' => 'gpt-3.5-turbo',
                        'messages' => [
                            ['role' => 'system', 'content' => 'Eres un abogado experto en tecnología. Devuelve solo HTML limpio.'],
                            ['role' => 'user', 'content' => $prompt]
                        ]
                    ]);
                $text = $response->json('choices.0.message.content');
            } else {
                // Gemini
                $model = env('APP_MODEL_AI', 'gemini-1.5-flash');
                $response = \Illuminate\Support\Facades\Http::withHeaders([
                    'x-goog-api-key' => $apiKey,
                    'Content-Type' => 'application/json',
                ])->timeout(30)->post("https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent", [
                    'contents' => [
                        ['parts' => [['text' => "Eres un abogado experto en tecnología. Devuelve solo HTML limpio. " . $prompt]]]
                    ]
                ]);
                $text = $response->json('candidates.0.content.parts.0.text');
            }

            if ($text) {
                // Remove markdown codeblock formatting if present
                $text = preg_replace('/```html\n?/', '', $text);
                $text = preg_replace('/```\n?/', '', $text);
                
                $field = $type === 'privacy' ? 'privacy_policy' : 'terms_and_conditions';
                $set($field, trim($text));
                \Filament\Notifications\Notification::make()->success()->title('Generado correctamente')->send();
            } else {
                \Filament\Notifications\Notification::make()->danger()->title('Error en IA')->body('No se pudo generar el texto.')->send();
            }
        } catch (\Exception $e) {
            \Filament\Notifications\Notification::make()->danger()->title('Error')->body($e->getMessage())->send();
        }
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
