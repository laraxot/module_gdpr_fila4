<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers\Filament;

<<<<<<< HEAD
use Override;
=======
>>>>>>> d6fdc5d (.)
use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Modules\Xot\Providers\Filament\XotBasePanelProvider;

class AdminPanelProvider extends XotBasePanelProvider
{
    protected string $module = 'Gdpr';

<<<<<<< HEAD
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
=======
    public function panel(Panel $panel): Panel
    {
        $panel = parent::panel($panel);
        FilamentAsset::register([
            Css::make('gdpr-styles', asset('/vendor/cookie-consent/css/cookie-consent.css')),
            // Js::make('gdpr-scripts', __DIR__.'/../../resources/dist/assets/app2.js'),
        ], 'gdpr');
>>>>>>> d6fdc5d (.)

        return $panel;
    }
}
