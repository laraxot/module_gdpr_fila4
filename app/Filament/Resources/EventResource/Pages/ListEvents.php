<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\EventResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
=======
<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
use Filament\Tables;
use Modules\Gdpr\Filament\Resources\EventResource;
use Modules\Xot\Filament\Resources\Pages\XotBaseListRecords;

class ListEvents extends XotBaseListRecords
{
    protected static string $resource = EventResource::class;

    public function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
            'ip' => TextColumn::make('ip')->searchable(),
            'action' => TextColumn::make('action')->searchable(),
=======
            'ip' => TextColumn::make('ip')
                ->searchable(),
            'action' => TextColumn::make('action')
                ->searchable(),
>>>>>>> a12f125f4a (.)
=======
            'ip' => TextColumn::make('ip')->searchable(),
            'action' => TextColumn::make('action')->searchable(),
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => TextColumn::make('updated_at')
<<<<<<< HEAD
=======
=======
            'id' => Tables\Columns\TextColumn::make('id')
                ->numeric()
                ->sortable()
                ->searchable(),
            'treatment_id' => Tables\Columns\TextColumn::make('treatment_id')
                ->numeric()
                ->sortable()
                ->searchable(),
            'consent_id' => Tables\Columns\TextColumn::make('consent.id')
                ->numeric()
                ->sortable()
                ->searchable(),
            'subject_id' => Tables\Columns\TextColumn::make('subject_id')
                ->numeric()
                ->sortable()
                ->searchable(),
            'ip' => Tables\Columns\TextColumn::make('ip')
                ->searchable(),
            'action' => Tables\Columns\TextColumn::make('action')
                ->searchable(),
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => Tables\Columns\TextColumn::make('updated_at')
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ];
    }
}
