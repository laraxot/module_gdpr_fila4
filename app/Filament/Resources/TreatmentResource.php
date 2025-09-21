<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources;

<<<<<<< HEAD
use Override;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> a12f125f4a (.)
=======
use Override;
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Modules\Gdpr\Filament\Resources\TreatmentResource\Pages\ListTreatments;
use Modules\Gdpr\Filament\Resources\TreatmentResource\Pages\CreateTreatment;
use Modules\Gdpr\Filament\Resources\TreatmentResource\Pages\EditTreatment;
<<<<<<< HEAD
=======
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
use Filament\Forms;
use Filament\Tables;
use Modules\Gdpr\Filament\Resources\TreatmentResource\Pages;
use Modules\Gdpr\Models\Treatment;
use Modules\Xot\Filament\Resources\XotBaseResource;

class TreatmentResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
    protected static null|string $model = Treatment::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'active' => Toggle::make('active')->required(),
            'required' => Toggle::make('required')->required(),
            'name' => TextInput::make('name')->required()->maxLength(191),
            'description' => Textarea::make('description')->required()->columnSpanFull(),
            'documentVersion' => TextInput::make('documentVersion')->maxLength(191)->default(null),
            'documentUrl' => TextInput::make('documentUrl')->maxLength(191)->default(null),
            'weight' => TextInput::make('weight')->required()->numeric(),
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Treatment::class;
=======
    protected static null|string $model = Treatment::class;
>>>>>>> b93ef594b4 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    #[Override]
    public static function getFormSchema(): array
    {
        return [
<<<<<<< HEAD
            'active' => Toggle::make('active')
                ->required(),
            'required' => Toggle::make('required')
                ->required(),
            'name' => TextInput::make('name')
                ->required()
                ->maxLength(191),
            'description' => Textarea::make('description')
                ->required()
                ->columnSpanFull(),
            'documentVersion' => TextInput::make('documentVersion')
                ->maxLength(191)
                ->default(null),
            'documentUrl' => TextInput::make('documentUrl')
                ->maxLength(191)
                ->default(null),
            'weight' => TextInput::make('weight')
                ->required()
                ->numeric(),
>>>>>>> a12f125f4a (.)
=======
            'active' => Toggle::make('active')->required(),
            'required' => Toggle::make('required')->required(),
            'name' => TextInput::make('name')->required()->maxLength(191),
            'description' => Textarea::make('description')->required()->columnSpanFull(),
            'documentVersion' => TextInput::make('documentVersion')->maxLength(191)->default(null),
            'documentUrl' => TextInput::make('documentUrl')->maxLength(191)->default(null),
            'weight' => TextInput::make('weight')->required()->numeric(),
>>>>>>> b93ef594b4 (.)
=======
    protected static ?string $model = Treatment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        return [
            'active' => Forms\Components\Toggle::make('active')
                ->required(),
            'required' => Forms\Components\Toggle::make('required')
                ->required(),
            'name' => Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(191),
            'description' => Forms\Components\Textarea::make('description')
                ->required()
                ->columnSpanFull(),
            'documentVersion' => Forms\Components\TextInput::make('documentVersion')
                ->maxLength(191)
                ->default(null),
            'documentUrl' => Forms\Components\TextInput::make('documentUrl')
                ->maxLength(191)
                ->default(null),
            'weight' => Forms\Components\TextInput::make('weight')
                ->required()
                ->numeric(),
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        ];
    }

    public function getTableColumns(): array
    {
        return [
            // Tables\Columns\TextColumn::make('id')
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
            
            //     ->searchable(),
            IconColumn::make('active')->boolean(),
            IconColumn::make('required')->boolean(),
            TextColumn::make('name')->searchable(),
            TextColumn::make('documentVersion')->searchable(),
            TextColumn::make('documentUrl')->searchable(),
            TextColumn::make('weight')->numeric()->sortable(),
<<<<<<< HEAD
=======
=======
            //
            //     ->searchable(),
            IconColumn::make('active')
                ->boolean(),
            IconColumn::make('required')
                ->boolean(),
            TextColumn::make('name')
                ->searchable(),
            TextColumn::make('documentVersion')
                ->searchable(),
            TextColumn::make('documentUrl')
                ->searchable(),
            TextColumn::make('weight')
                ->numeric()
                ->sortable(),
>>>>>>> a12f125f4a (.)
=======
            
            //     ->searchable(),
            IconColumn::make('active')->boolean(),
            IconColumn::make('required')->boolean(),
            TextColumn::make('name')->searchable(),
            TextColumn::make('documentVersion')->searchable(),
            TextColumn::make('documentUrl')->searchable(),
            TextColumn::make('weight')->numeric()->sortable(),
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
<<<<<<< HEAD
=======
=======
            //
            //     ->searchable(),
            Tables\Columns\IconColumn::make('active')
                ->boolean(),
            Tables\Columns\IconColumn::make('required')
                ->boolean(),
            Tables\Columns\TextColumn::make('name')
                ->searchable(),
            Tables\Columns\TextColumn::make('documentVersion')
                ->searchable(),
            Tables\Columns\TextColumn::make('documentUrl')
                ->searchable(),
            Tables\Columns\TextColumn::make('weight')
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListTreatments::route('/'),
            'create' => CreateTreatment::route('/create'),
            'edit' => EditTreatment::route('/{record}/edit'),
<<<<<<< HEAD
=======
=======
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTreatments::route('/'),
            'create' => Pages\CreateTreatment::route('/create'),
            'edit' => Pages\EditTreatment::route('/{record}/edit'),
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        ];
    }
}
