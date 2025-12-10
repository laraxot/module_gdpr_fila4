<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\TreatmentResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns\Column;
=======
>>>>>>> a074f99 (.)
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
        // Column types are inferred by Filament v4
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
=======
        return [
            'id' => TextColumn::make('id')->numeric()->sortable(),
            'name' => TextColumn::make('name')->searchable()->sortable(),
            'description' => TextColumn::make('description')->searchable()->sortable(),
            'is_active' => IconColumn::make('is_active')->boolean(),
            'data_creazione' => TextColumn::make('data_creazione')->dateTime()->sortable(),
            'data_ultima_modifica' => TextColumn::make('data_ultima_modifica')->dateTime()->sortable(),
>>>>>>> a074f99 (.)
        ];
    }
}
