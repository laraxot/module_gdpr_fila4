<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources;

<<<<<<< HEAD
use Override;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\ListConsents;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\CreateConsent;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\EditConsent;
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
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\ListConsents;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\CreateConsent;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\EditConsent;
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
use Modules\Gdpr\Filament\Clusters\Profile as ProfileCluster;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages;
use Modules\Gdpr\Models\Consent;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ConsentResource extends XotBaseResource
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
    protected static null|string $model = Consent::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static null|string $cluster = ProfileCluster::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [];
    }

    #[Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[Override]
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Consent::class;
=======
    protected static null|string $model = Consent::class;
>>>>>>> b93ef594b4 (.)

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static null|string $cluster = ProfileCluster::class;

    #[Override]
    public static function getFormSchema(): array
    {
        return [];
    }

    #[Override]
    public static function getRelations(): array
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
            'index' => ListConsents::route('/'),
            'create' => CreateConsent::route('/create'),
            'edit' => EditConsent::route('/{record}/edit'),
<<<<<<< HEAD
=======
=======
    protected static ?string $model = Consent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = ProfileCluster::class;

    public static function getFormSchema(): array
    {
        return [
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
            'index' => Pages\ListConsents::route('/'),
            'create' => Pages\CreateConsent::route('/create'),
            'edit' => Pages\EditConsent::route('/{record}/edit'),
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        ];
    }
}
