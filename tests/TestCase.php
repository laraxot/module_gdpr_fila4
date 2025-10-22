<?php

declare(strict_types=1);

namespace Modules\Gdpr\Tests;

<<<<<<< HEAD
use Illuminate\Foundation\Application;
use Modules\Gdpr\Providers\GdprServiceProvider;
=======
>>>>>>> 5a85228 (.)
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
        
>>>>>>> 5a85228 (.)
        // Seed any required data for Gdpr tests
        $this->artisan('module:seed', ['module' => 'Gdpr']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
     * @param Application $app
=======
     * @param \Illuminate\Foundation\Application $app
>>>>>>> 5a85228 (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
<<<<<<< HEAD
            GdprServiceProvider::class,
=======
            \Modules\Gdpr\Providers\GdprServiceProvider::class,
>>>>>>> 5a85228 (.)
        ];
    }
}
