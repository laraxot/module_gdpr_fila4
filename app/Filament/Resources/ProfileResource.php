<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Resources;

<<<<<<< HEAD
use Override;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Modules\Gdpr\Filament\Resources\ProfileResource\Pages\ListProfiles;
use Modules\Gdpr\Filament\Resources\ProfileResource\Pages\CreateProfile;
use Modules\Gdpr\Filament\Resources\ProfileResource\Pages\EditProfile;
=======
>>>>>>> 5a85228 (.)
use Filament\Forms;
use Modules\Gdpr\Filament\Resources\ProfileResource\Pages;
use Modules\Gdpr\Models\Profile;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ProfileResource extends XotBaseResource
{
<<<<<<< HEAD
    protected static null|string $model = Profile::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    #[Override]
    public static function getFormSchema(): array
    {
        return [
            'type' => TextInput::make('type')->maxLength(255)->default(null),
            'first_name' => TextInput::make('first_name')->maxLength(191)->default(null),
            'last_name' => TextInput::make('last_name')->maxLength(191)->default(null),
            'full_name' => TextInput::make('full_name')->maxLength(191)->default(null),
            'email' => TextInput::make('email')
                ->email()
                ->maxLength(191)
                ->default(null),
            'user_id' => TextInput::make('user_id')->maxLength(36)->default(null),
            'updated_by' => TextInput::make('updated_by')->maxLength(36)->default(null),
            'created_by' => TextInput::make('created_by')->maxLength(36)->default(null),
            'deleted_by' => TextInput::make('deleted_by')->maxLength(36)->default(null),
            'is_active' => Toggle::make('is_active')->required(),
        ];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            'index' => ListProfiles::route('/'),
            'create' => CreateProfile::route('/create'),
            'edit' => EditProfile::route('/{record}/edit'),
=======
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getFormSchema(): array
    {
        /** @var array<string, \Filament\Forms\Components\Component> */
        return [
            'type' => Forms\Components\TextInput::make('type')
                ->maxLength(255)
                ->default(null),
            'first_name' => Forms\Components\TextInput::make('first_name')
                ->maxLength(191)
                ->default(null),
            'last_name' => Forms\Components\TextInput::make('last_name')
                ->maxLength(191)
                ->default(null),
            'full_name' => Forms\Components\TextInput::make('full_name')
                ->maxLength(191)
                ->default(null),
            'email' => Forms\Components\TextInput::make('email')
                ->email()
                ->maxLength(191)
                ->default(null),
            'user_id' => Forms\Components\TextInput::make('user_id')
                ->maxLength(36)
                ->default(null),
            'updated_by' => Forms\Components\TextInput::make('updated_by')
                ->maxLength(36)
                ->default(null),
            'created_by' => Forms\Components\TextInput::make('created_by')
                ->maxLength(36)
                ->default(null),
            'deleted_by' => Forms\Components\TextInput::make('deleted_by')
                ->maxLength(36)
                ->default(null),
            'is_active' => Forms\Components\Toggle::make('is_active')
                ->required(),
        ];
    }

    public static function getRelations(): array
    {
        return [
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
>>>>>>> 5a85228 (.)
        ];
    }
}
