<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ceb9f4f (.)
use Override;
use Statikbe\CookieConsent\CookieConsentMiddleware;
use Illuminate\Routing\Router;
use Modules\Gdpr\Datas\GdprData;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
use Modules\Xot\Providers\XotBaseServiceProvider;
<<<<<<< HEAD
=======
use Statikbe\CookieConsent\CookieConsentMiddleware;
use Illuminate\Routing\Router;
use Modules\Gdpr\Datas\GdprData;
use Modules\Xot\Providers\XotBaseServiceProvider;
use Modules\Xot\Actions\Module\GetModulePathByGeneratorAction;
>>>>>>> 0c1819a (.)
=======
>>>>>>> ceb9f4f (.)

class GdprServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Gdpr';
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> 0c1819a (.)
=======
    #[Override]
>>>>>>> ceb9f4f (.)
    public function boot(): void
    {
        parent::boot();

        $lang_path = app(GetModulePathByGeneratorAction::class)->execute($this->name, 'lang');
        $this->loadTranslationsFrom($lang_path, 'cookie-consent');
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 0c1819a (.)
=======

>>>>>>> ceb9f4f (.)
        $router = app('router');
        $this->registerMyMiddleware($router);
    }

    public function registerMyMiddleware(Router $router): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $gdpr = GdprData::make();
        if ($gdpr->cookie_banner_enabled) {
=======
        $gdpr=GdprData::make();
        if($gdpr->cookie_banner_enabled){
>>>>>>> 0c1819a (.)
=======
        $gdpr = GdprData::make();
        if ($gdpr->cookie_banner_enabled) {
>>>>>>> ceb9f4f (.)
            $router->pushMiddlewareToGroup('web', CookieConsentMiddleware::class);
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
    
=======
    public function register(): void
    {
        parent::register();
    }
>>>>>>> 0c1819a (.)
=======
    
>>>>>>> ceb9f4f (.)
}
