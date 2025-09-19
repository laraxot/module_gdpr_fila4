<?php

declare(strict_types=1);

namespace Modules\Gdpr\Tests;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Gdpr\Providers\GdprServiceProvider;
=======
use Modules\Gdpr\Providers\GdprServiceProvider;
use Illuminate\Foundation\Application;
>>>>>>> 0c1819a (.)
=======
use Illuminate\Foundation\Application;
use Modules\Gdpr\Providers\GdprServiceProvider;
>>>>>>> ceb9f4f (.)
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;

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
<<<<<<< HEAD

=======
        
>>>>>>> 0c1819a (.)
=======

>>>>>>> ceb9f4f (.)
        // Seed any required data for Gdpr tests
        $this->artisan('module:seed', ['module' => 'Gdpr']);
    }

    /**
     * Get package providers.
     *
     * @param Application $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            GdprServiceProvider::class,
        ];
    }
}
