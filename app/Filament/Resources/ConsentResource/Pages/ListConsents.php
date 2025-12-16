<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ConsentResource\Pages;

<<<<<<< HEAD
=======
use Filament\Tables\Columns\IconColumn;
>>>>>>> adb2503 (.)
use Filament\Tables\Columns\TextColumn;
use Modules\Gdpr\Filament\Resources\ConsentResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListConsents extends XotBaseListRecords
{
    protected static string $resource = ConsentResource::class;

    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
            TextColumn::make('id')->searchable(),
            TextColumn::make('treatment.name')->searchable(),
            TextColumn::make('subject_id')->searchable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
=======
            'id' => TextColumn::make('id')->numeric()->sortable(),
            'treatment_id' => TextColumn::make('treatment.name')->sortable(),
            'subject_id' => TextColumn::make('subject.name')->sortable(),
            'is_accepted' => IconColumn::make('is_accepted')->boolean(),
            'data_creazione' => TextColumn::make('data_creazione')->dateTime()->sortable(),
            'data_ultima_modifica' => TextColumn::make('data_ultima_modifica')->dateTime()->sortable(),
>>>>>>> adb2503 (.)
        ];
    }
}
