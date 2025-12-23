<?php

declare(strict_types=1);

use Modules\Gdpr\Models\GdprConsent;
use Modules\User\Models\User;

<<<<<<< HEAD
describe('GDPR Consent Business Logic', function (): void {
    it('records consent with required metadata', function (): void {
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
=======
describe('GDPR Consent Business Logic', function () {
    it('records consent with required metadata', function () {
        $user = User::factory()->create();
>>>>>>> laraxot/develop

        $consent = GdprConsent::create([
            'user_id' => $user->id,
            'purpose' => 'marketing_emails',
            'consent_given' => true,
            'consent_date' => now(),
            'ip_address' => '192.168.1.1',
            'user_agent' => 'Mozilla/5.0',
            'legal_basis' => 'consent',
        ]);

        expect($consent)
            ->toBeInstanceOf(GdprConsent::class)
            ->and($consent->user_id)
            ->toBe($user->id)
            ->and($consent->purpose)
            ->toBe('marketing_emails')
            ->and($consent->consent_given)
            ->toBeTrue()
            ->and($consent->legal_basis)
            ->toBe('consent');
    });

<<<<<<< HEAD
    it('allows consent withdrawal', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $consent = GdprConsent/** @phpstan-ignore-line */ ::factory()->create([
            'consent_given' => true,
        ]);

        /** @phpstan-ignore-next-line method.nonObject */
=======
    it('allows consent withdrawal', function () {
        $consent = GdprConsent::factory()->create([
            'consent_given' => true,
        ]);

>>>>>>> laraxot/develop
        $consent->withdraw();

        expect($consent->fresh()->consent_given)->toBeFalse()->and($consent->fresh()->withdrawal_date)->not->toBeNull();
    });

<<<<<<< HEAD
    it('validates legal basis for processing', function (): void {
=======
    it('validates legal basis for processing', function () {
>>>>>>> laraxot/develop
        $validBases = [
            'consent',
            'contract',
            'legal_obligation',
            'vital_interests',
            'public_task',
            'legitimate_interests',
        ];

        foreach ($validBases as $basis) {
<<<<<<< HEAD
            /** @var \Illuminate\Database\Eloquent\Collection */
            $consent = GdprConsent/** @phpstan-ignore-line */ ::factory()->create([
=======
            $consent = GdprConsent::factory()->create([
>>>>>>> laraxot/develop
                'legal_basis' => $basis,
            ]);

            expect($consent->legal_basis)->toBe($basis);
        }
    });

<<<<<<< HEAD
    it('requires parental consent for minors', function (): void {
        /** @var User */
        $minor = User/** @phpstan-ignore-line */ ::factory()->create([
            'date_of_birth' => now()->subYears(14),
        ]);

        /** @var \Illuminate\Database\Eloquent\Collection */
        $consent = GdprConsent/** @phpstan-ignore-line */ ::factory()->create([
=======
    it('requires parental consent for minors', function () {
        $minor = User::factory()->create([
            'date_of_birth' => now()->subYears(14),
        ]);

        $consent = GdprConsent::factory()->create([
>>>>>>> laraxot/develop
            'user_id' => $minor->id,
            'purpose' => 'service_provision',
        ]);

        expect($consent->requiresParentalConsent())->toBeTrue();
    });

<<<<<<< HEAD
    it('tracks consent history', function (): void {
        /** @var User */
        $user = User/** @phpstan-ignore-line */ ::factory()->create();
=======
    it('tracks consent history', function () {
        $user = User::factory()->create();
>>>>>>> laraxot/develop

        // Initial consent
        $consent1 = GdprConsent::create([
            'user_id' => $user->id,
            'purpose' => 'analytics',
            'consent_given' => true,
            'consent_date' => now()->subDays(10),
        ]);

        // Consent withdrawal
        $consent2 = GdprConsent::create([
            'user_id' => $user->id,
            'purpose' => 'analytics',
            'consent_given' => false,
            'consent_date' => now()->subDays(5),
        ]);

        // New consent
        $consent3 = GdprConsent::create([
            'user_id' => $user->id,
            'purpose' => 'analytics',
            'consent_given' => true,
            'consent_date' => now(),
        ]);

        $history = GdprConsent::getConsentHistory($user->id, 'analytics');

        expect($history)
            ->toHaveCount(3)
<<<<<<< HEAD
            /** @phpstan-ignore-next-line method.nonObject */
            ->and($history->first()->consent_given)
            ->toBeTrue()
            /** @phpstan-ignore-next-line method.nonObject */
=======
            ->and($history->first()->consent_given)
            ->toBeTrue()
>>>>>>> laraxot/develop
            ->and($history->get(1)->consent_given)
            ->toBeFalse();
    });

<<<<<<< HEAD
    it('validates consent expiration', function (): void {
        /** @var \Illuminate\Database\Eloquent\Collection */
        $expiredConsent = GdprConsent/** @phpstan-ignore-line */ ::factory()->create([
=======
    it('validates consent expiration', function () {
        $expiredConsent = GdprConsent::factory()->create([
>>>>>>> laraxot/develop
            'consent_date' => now()->subYears(2),
            'expires_at' => now()->subYear(),
        ]);

<<<<<<< HEAD
        /** @var \Illuminate\Database\Eloquent\Collection */
        $validConsent = GdprConsent/** @phpstan-ignore-line */ ::factory()->create([
=======
        $validConsent = GdprConsent::factory()->create([
>>>>>>> laraxot/develop
            'consent_date' => now()->subMonths(6),
            'expires_at' => now()->addYear(),
        ]);

        expect($expiredConsent->isExpired())->toBeTrue()->and($validConsent->isExpired())->toBeFalse();
    });
});
