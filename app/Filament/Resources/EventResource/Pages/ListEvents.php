<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\EventResource\Pages;

use Filament\Tables\Columns\TextColumn;
<<<<<<< HEAD
=======
use Filament\Tables\Columns\Column;
>>>>>>> d6fdc5d (.)
use Filament\Tables;
use Modules\Gdpr\Filament\Resources\EventResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListEvents extends XotBaseListRecords
{
    protected static string $resource = EventResource::class;

    public function getTableColumns(): array
    {
<<<<<<< HEAD
=======
        // Column types are inferred by Filament v4
>>>>>>> d6fdc5d (.)
        return [
            'id' => TextColumn::make('id')
                ->numeric()
                ->sortable()
                ->searchable(),
            'treatment_id' => TextColumn::make('treatment_id')
                ->numeric()
                ->sortable()
                ->searchable(),
            'consent_id' => TextColumn::make('consent.id')
                ->numeric()
                ->sortable()
                ->searchable(),
            'subject_id' => TextColumn::make('subject_id')
                ->numeric()
                ->sortable()
                ->searchable(),
<<<<<<< HEAD
            'ip' => TextColumn::make('ip')->searchable(),
            'action' => TextColumn::make('action')->searchable(),
=======
            'ip' => TextColumn::make('ip')
                ->searchable(),
            'action' => TextColumn::make('action')
                ->searchable(),
>>>>>>> d6fdc5d (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
}
