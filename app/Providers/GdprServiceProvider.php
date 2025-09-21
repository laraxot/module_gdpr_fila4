<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers;

<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
use Override;
use Statikbe\CookieConsent\CookieConsentMiddleware;
use Illuminate\Routing\Router;
use Modules\Gdpr\Datas\GdprData;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Modules\Xot\Providers\XotBaseServiceProvider;
<<<<<<< HEAD
=======
=======
=======
use Override;
>>>>>>> b93ef594b4 (.)
use Statikbe\CookieConsent\CookieConsentMiddleware;
use Illuminate\Routing\Router;
use Modules\Gdpr\Datas\GdprData;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
use Modules\Xot\Providers\XotBaseServiceProvider;
>>>>>>> b93ef594b4 (.)
=======
use Illuminate\Routing\Router;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)

class GdprServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Gdpr';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
    #[Override]
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> a12f125f4a (.)
=======
    #[Override]
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    public function boot(): void
    {
        parent::boot();

        $lang_path = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'lang');
        $this->loadTranslationsFrom($lang_path, 'cookie-consent');
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
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
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $gdpr = GdprData::make();
        if ($gdpr->cookie_banner_enabled) {
=======
        $gdpr=GdprData::make();
        if($gdpr->cookie_banner_enabled){
>>>>>>> a12f125f4a (.)
=======
        $gdpr = GdprData::make();
        if ($gdpr->cookie_banner_enabled) {
>>>>>>> b93ef594b4 (.)
            $router->pushMiddlewareToGroup('web', CookieConsentMiddleware::class);
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
    
=======
=======
        $router->pushMiddlewareToGroup('web', \Statikbe\CookieConsent\CookieConsentMiddleware::class);
    }

>>>>>>> origin/develop
    public function register(): void
    {
        parent::register();
    }
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
    
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
}
