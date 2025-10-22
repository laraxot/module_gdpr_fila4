<?php

declare(strict_types=1);

namespace Modules\Gdpr\Tests;

<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Gdpr\Providers\GdprServiceProvider;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Gdpr\Providers\GdprServiceProvider;
=======
use Modules\Gdpr\Providers\GdprServiceProvider;
use Illuminate\Foundation\Application;
>>>>>>> a12f125f4a (.)
=======
use Illuminate\Foundation\Application;
use Modules\Gdpr\Providers\GdprServiceProvider;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Modules\Xot\Tests\CreatesApplication;

/**
 * Base test case for Gdpr module tests.
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Load Gdpr module specific configurations
        $this->loadLaravelMigrations();
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
        // Seed any required data for Gdpr tests
        $this->artisan('module:seed', ['module' => 'Gdpr']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
     * @param Application $app
=======
<<<<<<< HEAD
     * @param Application $app
=======
     * @param \Illuminate\Foundation\Application $app
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
<<<<<<< HEAD
            GdprServiceProvider::class,
=======
<<<<<<< HEAD
            GdprServiceProvider::class,
=======
            \Modules\Gdpr\Providers\GdprServiceProvider::class,
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        ];
    }
}
