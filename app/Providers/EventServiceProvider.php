<?php

declare(strict_types=1);

namespace Modules\Gdpr\Providers;

<<<<<<< HEAD
use Override;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;
use Modules\Xot\Providers\XotBaseEventServiceProvider;
=======
use Modules\Xot\Providers\XotBaseEventServiceProvider;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as BaseEventServiceProvider;
>>>>>>> d6fdc5d (.)

class EventServiceProvider extends XotBaseEventServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array<string, array<int, string>>
     */
    protected $listen = [];

    /**
     * Indicates if events should be discovered.
     *
     * @var bool
     */
    protected static $shouldDiscoverEvents = true;

    /**
     * Configure the proper event listeners for email verification.
     */
<<<<<<< HEAD
    #[Override]
=======
>>>>>>> d6fdc5d (.)
    protected function configureEmailVerification(): void
    {
    }
}
