<?php

declare(strict_types=1);

namespace Modules\Gdpr\Filament\Clusters\Profile\Resources;

<<<<<<< HEAD
use Override;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\ListConsents;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\CreateConsent;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages\EditConsent;
=======
>>>>>>> 5a85228 (.)
use Modules\Gdpr\Filament\Clusters\Profile as ProfileCluster;
use Modules\Gdpr\Filament\Clusters\Profile\Resources\ConsentResource\Pages;
use Modules\Gdpr\Models\Consent;
use Modules\Xot\Filament\Resources\XotBaseResource;

class ConsentResource extends XotBaseResource
{
<<<<<<< HEAD
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
    public static function getPages(): array
    {
        return [
            'index' => ListConsents::route('/'),
            'create' => CreateConsent::route('/create'),
            'edit' => EditConsent::route('/{record}/edit'),
=======
    protected static ?string $model = Consent::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = ProfileCluster::class;

    public static function getFormSchema(): array
    {
        /** @var array<string, \Filament\Forms\Components\Component> */
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
>>>>>>> 5a85228 (.)
        ];
    }
}
