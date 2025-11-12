<?php

declare(strict_types=1);

use Modules\Gdpr\Models\Consent;
use Modules\Gdpr\Tests\TestCase;

pest()->extend(TestCase::class)->in('Feature', 'Unit');

/** @phpstan-ignore-next-line property.nonObject, variable.undefined */
expect()->extend('toBeConsent', fn () => expect($this->value)->toBeInstanceOf(Consent::class));

/**
 * @param array<string, mixed> $attributes
 *
 * @return Consent
 */
function createConsent(array $attributes = []): Consent
{
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<Consent> $factory */
    $factory = Consent::factory();

    /** @var Consent $consent */
    $consent = $factory->create($attributes);

    return $consent;
}

/**
 * @param array<string, mixed> $attributes
 *
 * @return Consent
 */
function makeConsent(array $attributes = []): Consent
{
    /** @var \Illuminate\Database\Eloquent\Factories\Factory<Consent> $factory */
    $factory = Consent::factory();

    /** @var Consent $consent */
    $consent = $factory->make($attributes);

    return $consent;
}
