<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources;

use Modules\Gdpr\Filament\Clusters\Profile as ProfileCluster;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages\CreateProfile;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages\EditProfile;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ProfileResource\Pages\ListProfiles;
use Modules\Gdpr\Models\Profile;
use Modules\Xot\Filament\Resources\XotBaseResource;
<<<<<<< HEAD
use Override;
=======
>>>>>>> laraxot/develop

class ProfileResource extends XotBaseResource
{
    protected static ?string $model = Profile::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = ProfileCluster::class;

<<<<<<< HEAD
    #[Override]
=======
    #[\Override]
>>>>>>> laraxot/develop
    public static function getFormSchema(): array
    {
        return [];
    }

<<<<<<< HEAD
    #[Override]
=======
    #[\Override]
>>>>>>> laraxot/develop
    public static function getPages(): array
    {
        return [
            'index' => ListProfiles::route('/'),
            'create' => CreateProfile::route('/create'),
            'edit' => EditProfile::route('/{record}/edit'),
        ];
    }
}
