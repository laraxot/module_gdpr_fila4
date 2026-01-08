<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\TreatmentResource\Pages;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Modules\Gdpr\Filament\Resources\TreatmentResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListTreatments extends XotBaseListRecords
{
    protected static string $resource = TreatmentResource::class;

    public function getTableColumns(): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> cc408a6f (.)
            // Tables\Columns\TextColumn::make('id')
            //     ->searchable(),
            IconColumn::make('active')->boolean(),
            IconColumn::make('required')->boolean(),
            TextColumn::make('name')->searchable(),
            TextColumn::make('documentVersion')->searchable(),
            TextColumn::make('documentUrl')->searchable(),
            TextColumn::make('weight')->numeric()->sortable(),
            TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
<<<<<<< HEAD
=======
            'id' => TextColumn::make('id')->numeric()->sortable(),
            'name' => TextColumn::make('name')->searchable()->sortable(),
            'description' => TextColumn::make('description')->searchable()->sortable(),
            'is_active' => IconColumn::make('is_active')->boolean(),
            'data_creazione' => TextColumn::make('data_creazione')->dateTime()->sortable(),
            'data_ultima_modifica' => TextColumn::make('data_ultima_modifica')->dateTime()->sortable(),
<<<<<<< HEAD
>>>>>>> 95dc6c2f (.)
=======
=======
        /** @var array<string, \Filament\Tables\Columns\Column> */
=======
        /** @var array<string, Column> */
>>>>>>> 4f72b08a (.)
        return [
            'id' => TextColumn::make('id')
                ->numeric()
                ->sortable(),
            'name' => TextColumn::make('name')
                ->searchable()
                ->sortable(),
            'description' => TextColumn::make('description')
                ->searchable()
                ->sortable(),
            'is_active' => IconColumn::make('is_active')
                ->boolean(),
            'data_creazione' => TextColumn::make('data_creazione')
                ->dateTime()
                ->sortable(),
            'data_ultima_modifica' => TextColumn::make('data_ultima_modifica')
                ->dateTime()
                ->sortable(),
<<<<<<< HEAD
>>>>>>> 5a85228 (.)
>>>>>>> ead2100a (.)
=======
>>>>>>> 4f72b08a (.)
=======
>>>>>>> cc408a6f (.)
        ];
    }
}
