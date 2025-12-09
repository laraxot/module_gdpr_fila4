<?php

declare(strict_types=1);

use Modules\Gdpr\Models\GdprConsent;
use Modules\Gdpr\Models\GdprRequest;
use Modules\Gdpr\Tests\TestCase;

pest()->extend(TestCase::class)->in('Feature', 'Unit');

expect()->extend('toBeGdprConsent', function () {
    /** @var \Pest\Expectation<mixed> $this */
    return $this->toBeInstanceOf(GdprConsent::class);
});

expect()->extend('toBeGdprRequest', function () {
    /** @var \Pest\Expectation<mixed> $this */
    return $this->toBeInstanceOf(GdprRequest::class);
});

/**
 * @param array<string, mixed> $attributes
 */
function createGdprConsent(array $attributes = []): GdprConsent
{
    $factory = GdprConsent::factory();
    if (!is_object($factory) || !method_exists($factory, 'create')) {
        throw new \RuntimeException('GdprConsent factory not available');
    }
    $consent = $factory->create($attributes);
    assert($consent instanceof GdprConsent);
    return $consent;
}

/**
 * @param array<string, mixed> $attributes
 */
function makeGdprConsent(array $attributes = []): GdprConsent
{
    $factory = GdprConsent::factory();
    if (!is_object($factory) || !method_exists($factory, 'make')) {
        throw new \RuntimeException('GdprConsent factory not available');
    }
    $consent = $factory->make($attributes);
    assert($consent instanceof GdprConsent);
    return $consent;
}

/**
 * @param array<string, mixed> $attributes
 */
function createGdprRequest(array $attributes = []): GdprRequest
{
    $factory = GdprRequest::factory();
    if (!is_object($factory) || !method_exists($factory, 'create')) {
        throw new \RuntimeException('GdprRequest factory not available');
    }
    $request = $factory->create($attributes);
    assert($request instanceof GdprRequest);
    return $request;
}

/**
 * @param array<string, mixed> $attributes
 */
function makeGdprRequest(array $attributes = []): GdprRequest
{
    $factory = GdprRequest::factory();
    if (!is_object($factory) || !method_exists($factory, 'make')) {
        throw new \RuntimeException('GdprRequest factory not available');
    }
    $request = $factory->make($attributes);
    assert($request instanceof GdprRequest);
    return $request;
}
