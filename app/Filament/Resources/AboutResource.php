<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\Action;
use Illuminate\View\View;
use Filament\Tables\Actions\ViewAction;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'About';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Personal Information')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->tel()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('address')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),

                Section::make('Profile')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->required()
                            ->directory('about-images')
                            ->imagePreviewHeight('250')
                            ->preserveFilenames()
                            ->maxSize(1024),
                        Textarea::make('title')
                            ->required()
                            ->rows(5),
                        Textarea::make('description')
                            ->required()
                            ->rows(5),
                    ]),

                Section::make('Portfolio Thumbnails')
                    ->schema([
                        Repeater::make('thumbnail')
                            ->schema([
                                FileUpload::make('image')
                                    ->image()
                                    ->required()
                                    ->directory('about-thumbnails')
                                    ->imagePreviewHeight('250')
                                    ->preserveFilenames()
                                    ->maxSize(1024)
                            ])
                            ->defaultItems(1)
                            ->addActionLabel('Add Thumbnail')
                            ->collapsible()
                            ->cloneable()
                            ->maxItems(15)
                            ->columns(2)
                    ]),

                Section::make('Social Media')
                    ->schema([
                        TextInput::make('linkedin')
                            ->url()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('github')
                            ->url()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('whatsapp')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),

                Section::make('Resume')
                    ->schema([
                        FileUpload::make('resume')
                            ->label('Resume/CV (PDF)')
                            ->directory('about-resume')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(5120) // 5MB
                            ->downloadable()
                            ->preserveFilenames()
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
