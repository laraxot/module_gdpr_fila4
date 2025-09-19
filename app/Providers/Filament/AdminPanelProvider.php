<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
use Override;
=======
>>>>>>> 0c1819a (.)
=======
use Override;
>>>>>>> ceb9f4f (.)
use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Gdpr';

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ceb9f4f (.)
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
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
        FilamentAsset::register([
            Css::make('gdpr-styles', asset('/vendor/cookie-consent/css/cookie-consent.css')),
            // Js::make('gdpr-scripts', __DIR__.'/../../resources/dist/assets/app2.js'),
        ], 'gdpr');
>>>>>>> 0c1819a (.)
=======
>>>>>>> ceb9f4f (.)

        return $panel;
    }
}
