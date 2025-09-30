<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources;

<<<<<<< HEAD
use Override;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages\ListProfiles;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages\CreateProfile;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages\EditProfile;
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
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages\ListProfiles;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages\CreateProfile;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages\EditProfile;
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
use Modules\Gdpr\Filament\Clusters\Profile as ProfileCluster;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages;
use Modules\Gdpr\Models\Profile;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ProfileResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
    protected static null|string $model = Profile::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static null|string $cluster = ProfileCluster::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [];
    }

    #[Override]
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Profile::class;
=======
    protected static null|string $model = Profile::class;
>>>>>>> b93ef594b4 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static null|string $cluster = ProfileCluster::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [];
    }

<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
    public static function getPages(): array
    {
        return [
            'index' => ListProfiles::route('/'),
            'create' => CreateProfile::route('/create'),
            'edit' => EditProfile::route('/{record}/edit'),
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = ProfileCluster::class;

    public static function getFormSchema(): array
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
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        ];
    }
}
