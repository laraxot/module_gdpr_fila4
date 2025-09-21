<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources\ProfileResource\Pages;

<<<<<<< HEAD
use Override;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
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
<<<<<<< HEAD
=======
=======
    public function getTableColumns(): array
    {
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
>>>>>>> a12f125f4a (.)
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
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
            'created_at' => TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
<<<<<<< HEAD
            'user_id' => TextColumn::make('user_id')->searchable(),
            'updated_by' => TextColumn::make('updated_by')->searchable(),
            'created_by' => TextColumn::make('created_by')->searchable(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'user_id' => TextColumn::make('user_id')->searchable(),
            'updated_by' => TextColumn::make('updated_by')->searchable(),
            'created_by' => TextColumn::make('created_by')->searchable(),
=======
            'user_id' => TextColumn::make('user_id')
                ->searchable(),
            'updated_by' => TextColumn::make('updated_by')
                ->searchable(),
            'created_by' => TextColumn::make('created_by')
                ->searchable(),
>>>>>>> a12f125f4a (.)
=======
            'user_id' => TextColumn::make('user_id')->searchable(),
            'updated_by' => TextColumn::make('updated_by')->searchable(),
            'created_by' => TextColumn::make('created_by')->searchable(),
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
            'deleted_at' => TextColumn::make('deleted_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
<<<<<<< HEAD
            'deleted_by' => TextColumn::make('deleted_by')->searchable(),
            'is_active' => IconColumn::make('is_active')->boolean(),
=======
<<<<<<< HEAD
<<<<<<< HEAD
            'deleted_by' => TextColumn::make('deleted_by')->searchable(),
            'is_active' => IconColumn::make('is_active')->boolean(),
=======
            'deleted_by' => TextColumn::make('deleted_by')
                ->searchable(),
            'is_active' => IconColumn::make('is_active')
                ->boolean(),
>>>>>>> a12f125f4a (.)
=======
            'deleted_by' => TextColumn::make('deleted_by')->searchable(),
            'is_active' => IconColumn::make('is_active')->boolean(),
>>>>>>> b93ef594b4 (.)
=======
    public function getTableColumns(): array
    {
        return [
            'id' => Tables\Columns\TextColumn::make('id')
                ->searchable(),
            'type' => Tables\Columns\TextColumn::make('type')
                ->searchable(),
            'first_name' => Tables\Columns\TextColumn::make('first_name')
                ->searchable(),
            'last_name' => Tables\Columns\TextColumn::make('last_name')
                ->searchable(),
            'full_name' => Tables\Columns\TextColumn::make('full_name')
                ->searchable(),
            'email' => Tables\Columns\TextColumn::make('email')
                ->searchable(),
            'created_at' => Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'updated_at' => Tables\Columns\TextColumn::make('updated_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'user_id' => Tables\Columns\TextColumn::make('user_id')
                ->searchable(),
            'updated_by' => Tables\Columns\TextColumn::make('updated_by')
                ->searchable(),
            'created_by' => Tables\Columns\TextColumn::make('created_by')
                ->searchable(),
            'deleted_at' => Tables\Columns\TextColumn::make('deleted_at')
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            'deleted_by' => Tables\Columns\TextColumn::make('deleted_by')
                ->searchable(),
            'is_active' => Tables\Columns\IconColumn::make('is_active')
                ->boolean(),
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        ];
    }
}
