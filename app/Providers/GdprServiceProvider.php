<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers;

<<<<<<< HEAD
use Override;
use Statikbe\CookieConsent\CookieConsentMiddleware;
use Illuminate\Routing\Router;
use Modules\Gdpr\Datas\GdprData;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Modules\Xot\Providers\XotBaseServiceProvider;
=======
use Statikbe\CookieConsent\CookieConsentMiddleware;
use Illuminate\Routing\Router;
use Modules\Gdpr\Datas\GdprData;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> 7f200e9 (.)

class GdprServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Gdpr';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 7f200e9 (.)
    public function boot(): void
    {
        parent::boot();

        $lang_path = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'lang');
        $this->loadTranslationsFrom($lang_path, 'cookie-consent');
<<<<<<< HEAD

=======
        
>>>>>>> 7f200e9 (.)
        $router = app('router');
        $this->registerMyMiddleware($router);
    }

    public function registerMyMiddleware(Router $router): void
    {
<<<<<<< HEAD
        $gdpr = GdprData::make();
        if ($gdpr->cookie_banner_enabled) {
            $router->pushMiddlewareToGroup('web', CookieConsentMiddleware::class);
        }
    }
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 111fa0e (.)
=======

    
>>>>>>> 54ea05f (.)
=======
        $gdpr=GdprData::make();
        if($gdpr->cookie_banner_enabled){
            $router->pushMiddlewareToGroup('web', CookieConsentMiddleware::class);
        }
    }

    public function register(): void
    {
        parent::register();
    }
>>>>>>> 7f200e9 (.)
=======
>>>>>>> d5b1ed8 (.)
}
