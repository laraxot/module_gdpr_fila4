<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources;

<<<<<<< HEAD
use Override;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages\ListConsents;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages\CreateConsent;
use Modules\Gdpr\Filament\Resources\ConsentResource\Pages\EditConsent;
=======
>>>>>>> 5a85228 (.)
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
        return [
            'treatment_id' => Select::make('treatment_id')
                ->relationship('treatment', 'name')
                ->required(),
            'subject_id' => TextInput::make('subject_id')->required()->maxLength(191),
=======
    protected static ?string $model = Consent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        /** @var array<string, \Filament\Forms\Components\Component> */
        return [
            'treatment_id' => Forms\Components\Select::make('treatment_id')
                ->relationship('treatment', 'name')
                ->required(),
            'subject_id' => Forms\Components\TextInput::make('subject_id')
                ->required()
                ->maxLength(191),
>>>>>>> 5a85228 (.)
        ];
    }

    public function getTableColumns(): array
    {
<<<<<<< HEAD
        return [
            TextColumn::make('id')->searchable(),
            TextColumn::make('treatment.name')->searchable(),
            TextColumn::make('subject_id')->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
=======
        /** @var array<string, \Filament\Tables\Columns\Column> */
        return [
            Tables\Columns\TextColumn::make('id')

                ->searchable(),
            Tables\Columns\TextColumn::make('treatment.name')
                ->searchable(),
            Tables\Columns\TextColumn::make('subject_id')
                ->searchable(),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
>>>>>>> 5a85228 (.)
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }

<<<<<<< HEAD
    #[Override]
    public static function getPages(): array
    {
        return [
            'index' => ListConsents::route('/'),
            'create' => CreateConsent::route('/create'),
            'edit' => EditConsent::route('/{record}/edit'),
=======
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListConsents::route('/'),
            'create' => Pages\CreateConsent::route('/create'),
            'edit' => Pages\EditConsent::route('/{record}/edit'),
>>>>>>> 5a85228 (.)
        ];
    }
}
