<?php

declare(strict_types=1);

use Modules\Gdpr\Models\GdprConsent;
use Modules\User\Models\User;

test('gdpr consent can be created', function () {
    $user = User::factory()->create();
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
    $consent = createGdprConsent([
        'user_id' => $user->id,
        'consent_type' => 'privacy_policy',
        'consented_at' => now(),
        'ip_address' => '192.168.1.1',
    ]);

    expect($consent)
        ->toBeGdprConsent()
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
        ->and($consent->consent_type)
        ->toBe('privacy_policy')
        ->and($consent->ip_address)
        ->toBe('192.168.1.1')
        ->and($consent->consented_at)
        ->not->toBeNull();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        ->and($consent->consent_type)->toBe('privacy_policy')
        ->and($consent->ip_address)->toBe('192.168.1.1')
        ->and($consent->consented_at)->not->toBeNull();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        ->and($consent->consent_type)->toBe('privacy_policy')
        ->and($consent->ip_address)->toBe('192.168.1.1')
        ->and($consent->consented_at)->not->toBeNull();
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
});

test('gdpr consent belongs to user', function () {
    $user = User::factory()->create();
    $consent = createGdprConsent(['user_id' => $user->id]);
<<<<<<< HEAD

    expect($consent->user)->toBeInstanceOf(User::class)->and($consent->user->id)->toBe($user->id);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    expect($consent->user)->toBeInstanceOf(User::class)->and($consent->user->id)->toBe($user->id);
=======
=======
>>>>>>> origin/develop
    
    expect($consent->user)
        ->toBeInstanceOf(User::class)
        ->and($consent->user->id)->toBe($user->id);
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======

    expect($consent->user)->toBeInstanceOf(User::class)->and($consent->user->id)->toBe($user->id);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
});

test('gdpr consent can be withdrawn', function () {
    $consent = createGdprConsent(['withdrawn_at' => null]);
<<<<<<< HEAD

    $consent->withdraw();

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    $consent->withdraw();

=======
    
    $consent->withdraw();
    
>>>>>>> a12f125f4a (.)
=======

    $consent->withdraw();

>>>>>>> b93ef594b4 (.)
=======
    
    $consent->withdraw();
    
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    expect($consent->fresh()->withdrawn_at)->not->toBeNull();
});

test('gdpr consent scope active works', function () {
    createGdprConsent(['withdrawn_at' => null]); // Active
    createGdprConsent(['withdrawn_at' => now()]); // Withdrawn
<<<<<<< HEAD

    $activeCount = GdprConsent::active()->count();

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

    $activeCount = GdprConsent::active()->count();

=======
    
    $activeCount = GdprConsent::active()->count();
    
>>>>>>> a12f125f4a (.)
=======

    $activeCount = GdprConsent::active()->count();

>>>>>>> b93ef594b4 (.)
=======
    
    $activeCount = GdprConsent::active()->count();
    
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    expect($activeCount)->toBe(1);
});
