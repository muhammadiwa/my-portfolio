<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages\ListEducation;
use App\Filament\Resources\EducationResource\Pages\CreateEducation;
use App\Filament\Resources\EducationResource\Pages\EditEducation;
use App\Filament\Resources\EducationResource\Pages\ViewEducation;
use App\Models\Education;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $navigationLabel = 'Education';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->required()
                    ->rows(4)
                    ->maxLength(65535),
                TextInput::make('start_year')
                    ->required()
                    ->maxLength(4)
                    ->label('Start Year'),
                TextInput::make('end_year')
                    ->required()
                    ->maxLength(4)
                    ->label('End Year'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('description')
                    ->limit(50)
                    ->tooltip(fn (TextColumn $column): ?string => $column->getState()),
                TextColumn::make('start_year')
                    ->label('Start Year')
                    ->sortable(),
                TextColumn::make('end_year')
                    ->label('End Year')
                    ->sortable(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEducation::route('/'),
            'create' => CreateEducation::route('/create'),
            'edit' => EditEducation::route('/{record}/edit'),
            // 'view' => ViewEducation::route('/{record}'),
        ];
    }
}
