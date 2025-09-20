<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ProfileResource\Pages;

<<<<<<< HEAD
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\Column;
=======
use Override;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
>>>>>>> a074f99 (.)
use Filament\Tables;
use Modules\Gdpr\Filament\Resources\ProfileResource;
use Modules\User\Filament\Resources\BaseProfileResource\Pages\ListProfiles as UserListProfiles;

class ListProfiles extends UserListProfiles
{
    protected static string $resource = ProfileResource::class;

    /**
     * @return array<string, Tables\Columns\Column>
     */
<<<<<<< HEAD
    public function getTableColumns(): array
    {
        // Column types are inferred by Filament v4
        return [
            'id' => TextColumn::make('id')
                ->searchable(),
            'type' => TextColumn::make('type')
                ->searchable(),
            'first_name' => TextColumn::make('first_name')
                ->searchable(),
            'last_name' => TextColumn::make('last_name')
                ->searchable(),
            'full_name' => TextColumn::make('full_name')
                ->searchable(),
            'email' => TextColumn::make('email')
                ->searchable(),
=======
    #[Override]
    public function getTableColumns(): array
    {
        return [
            'id' => TextColumn::make('id')->searchable(),
            'type' => TextColumn::make('type')->searchable(),
            'first_name' => TextColumn::make('first_name')->searchable(),
            'last_name' => TextColumn::make('last_name')->searchable(),
            'full_name' => TextColumn::make('full_name')->searchable(),
            'email' => TextColumn::make('email')->searchable(),
>>>>>>> a074f99 (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
<<<<<<< HEAD
            'user_id' => TextColumn::make('user_id')
                ->searchable(),
            'updated_by' => TextColumn::make('updated_by')
                ->searchable(),
            'created_by' => TextColumn::make('created_by')
                ->searchable(),
=======
            'user_id' => TextColumn::make('user_id')->searchable(),
            'updated_by' => TextColumn::make('updated_by')->searchable(),
            'created_by' => TextColumn::make('created_by')->searchable(),
>>>>>>> a074f99 (.)
            'deleted_at' => TextColumn::make('deleted_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
<<<<<<< HEAD
            'deleted_by' => TextColumn::make('deleted_by')
                ->searchable(),
            'is_active' => IconColumn::make('is_active')
                ->boolean(),
=======
            'deleted_by' => TextColumn::make('deleted_by')->searchable(),
            'is_active' => IconColumn::make('is_active')->boolean(),
>>>>>>> a074f99 (.)
        ];
    }
}
