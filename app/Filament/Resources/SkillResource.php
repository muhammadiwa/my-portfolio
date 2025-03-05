<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillResource\Pages;
use App\Models\Skill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Skill';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Skill Thumbnails')
                    ->schema([
                        Repeater::make('thumbnail')
                            ->schema([
                                FileUpload::make('image')
                                    ->image()
                                    ->required()
                                    ->directory('skills')
                                    ->imagePreviewHeight('250')
                                    ->preserveFilenames()
                                    ->maxSize(1024),
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255),
                            ])
                            ->defaultItems(1)
                            ->addActionLabel('Add Skill')
                            ->collapsible()
                            ->cloneable()
                            ->maxItems(15)
                            ->columns(2)
                    ]),

                Section::make('Skill Categories')
                    ->schema([
                        TextInput::make('frontend')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('backend')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('database')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('tools')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('others')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('frontend')
                    ->searchable()
                    ->limit(50),
                TextColumn::make('backend')
                    ->searchable()
                    ->limit(50),
                TextColumn::make('database')
                    ->searchable()
                    ->limit(50),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // Add these methods to limit creation to one record
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function canCreate(): bool
    {
        return static::getModel()::count() === 0;
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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }
}
