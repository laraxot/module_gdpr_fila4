<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources;

<<<<<<< HEAD
use Override;
=======
>>>>>>> 7f200e9 (.)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages\ListConsents;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages\CreateConsent;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages\EditConsent;
<<<<<<< HEAD
=======
use Filament\Tables\Columns\Column;
>>>>>>> 7f200e9 (.)
use Filament\Forms;
use Filament\Tables;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages;
use Modules\Gdpr\Models\Consent;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ConsentResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static null|string $model = Consent::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    #[Override]
    public static function getFormSchema(): array
    {
=======
    protected static ?string $model = Consent::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        // Types are inferred by Filament v4
>>>>>>> 7f200e9 (.)
        return [
            'treatment_id' => Select::make('treatment_id')
                ->relationship('treatment', 'name')
                ->required(),
<<<<<<< HEAD
            'subject_id' => TextInput::make('subject_id')->required()->maxLength(191),
=======
            'subject_id' => TextInput::make('subject_id')
                ->required()
                ->maxLength(191),
>>>>>>> 7f200e9 (.)
        ];
    }

    public function getTableColumns(): array
    {
<<<<<<< HEAD
        return [
            TextColumn::make('id')->searchable(),
            TextColumn::make('treatment.name')->searchable(),
            TextColumn::make('subject_id')->searchable(),
=======
        // Types are inferred by Filament v4
        return [
            TextColumn::make('id')

                ->searchable(),
            TextColumn::make('treatment.name')
                ->searchable(),
            TextColumn::make('subject_id')
                ->searchable(),
>>>>>>> 7f200e9 (.)
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 7f200e9 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListConsents::route('/'),
            'create' => CreateConsent::route('/create'),
            'edit' => EditConsent::route('/{record}/edit'),
        ];
    }
}
