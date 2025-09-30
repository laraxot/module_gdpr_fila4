<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources;

<<<<<<< HEAD
use Override;
=======
>>>>>>> 0c1819a (.)
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages\ListConsents;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages\CreateConsent;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages\EditConsent;
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
=======
    protected static ?string $model = Consent::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

>>>>>>> 0c1819a (.)
    public static function getFormSchema(): array
    {
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
>>>>>>> 0c1819a (.)
        ];
    }

    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
            TextColumn::make('id')->searchable(),
            TextColumn::make('treatment.name')->searchable(),
            TextColumn::make('subject_id')->searchable(),
=======
            TextColumn::make('id')

                ->searchable(),
            TextColumn::make('treatment.name')
                ->searchable(),
            TextColumn::make('subject_id')
                ->searchable(),
>>>>>>> 0c1819a (.)
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
>>>>>>> 0c1819a (.)
    public static function getPages(): array
    {
        return [
            'index' => ListConsents::route('/'),
            'create' => CreateConsent::route('/create'),
            'edit' => EditConsent::route('/{record}/edit'),
        ];
    }
}
