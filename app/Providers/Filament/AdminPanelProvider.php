<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers\Filament;

<<<<<<< HEAD
use Override;
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
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Gdpr';

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
    #[Override]
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
        FilamentAsset::register(
            [
                Css::make('gdpr-styles', asset('/vendor/cookie-consent/css/cookie-consent.css')),
                // Js::make('gdpr-scripts', __DIR__.'/../../resources/dist/assets/app2.js'),
            ],
            'gdpr',
        );
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
        FilamentAsset::register([
            Css::make('gdpr-styles', asset('/vendor/cookie-consent/css/cookie-consent.css')),
            // Js::make('gdpr-scripts', __DIR__.'/../../resources/dist/assets/app2.js'),
        ], 'gdpr');
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    #[Override]
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
        FilamentAsset::register(
            [
                Css::make('gdpr-styles', asset('/vendor/cookie-consent/css/cookie-consent.css')),
                // Js::make('gdpr-scripts', __DIR__.'/../../resources/dist/assets/app2.js'),
            ],
            'gdpr',
        );
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)

        return $panel;
    }
}
