<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources;

use Modules\Gdpr\Filament\Clusters\Profile as ProfileCluster;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\CreateConsent;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\EditConsent;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\ListConsents;
use Modules\Gdpr\Models\Consent;
use Modules\Xot\Filament\Resources\XotBaseResource;
<<<<<<< HEAD
use Override;
=======
>>>>>>> laraxot/develop

class ConsentResource extends XotBaseResource
{
    protected static ?string $model = Consent::class;

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
    public static function getRelations(): array
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
            'index' => ListConsents::route('/'),
            'create' => CreateConsent::route('/create'),
            'edit' => EditConsent::route('/{record}/edit'),
        ];
    }
}
