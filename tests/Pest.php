<?php

declare(strict_types=1);

use Modules\Gdpr\Models\Consent;
use Modules\Gdpr\Tests\TestCase;

/** @phpstan-ignore-next-line method.internalClass */
pest()->extend(TestCase::class)->in('Feature', 'Unit');

/** @phpstan-ignore-next-line property.nonObject, variable.undefined */
expect()->extend('toBeConsent', function () {
    /** @var \Pest\Expectation<mixed> $this */
    /** @phpstan-ignore-next-line method.nonObject, variable.undefined, varTag.variableNotFound */
    return $this->toBeInstanceOf(Consent::class);
});

/**
 * @param array<string, mixed> $attributes
 */
function createConsent(array $attributes = []): Consent
{
    $factory = Consent::factory();
    if (!is_object($factory) || !method_exists($factory, 'create')) {
        throw new \RuntimeException('Consent factory not available');
    }
    $consent = $factory->create($attributes);
    assert($consent instanceof Consent);
    return $consent;
}

/**
 * @param array<string, mixed> $attributes
 */
function makeConsent(array $attributes = []): Consent
{
    $factory = Consent::factory();
    if (!is_object($factory) || !method_exists($factory, 'make')) {
        throw new \RuntimeException('Consent factory not available');
    }
    $consent = $factory->make($attributes);
    assert($consent instanceof Consent);
    return $consent;
}
