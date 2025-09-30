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
>>>>>>> 0c1819a (.)

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
>>>>>>> 0c1819a (.)
    protected function configureEmailVerification(): void
    {
    }
}
