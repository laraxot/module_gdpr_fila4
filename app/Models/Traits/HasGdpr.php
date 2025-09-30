<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models\Traits;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;
<<<<<<< HEAD
use Modules\Gdpr\Enums\ConsentType;
use Modules\Gdpr\Models\Consent;
use Modules\Gdpr\Models\Treatment;
=======
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Gdpr\Enums\ConsentType;
use Modules\Gdpr\Models\Consent;
use Modules\Gdpr\Models\Treatment;
=======
use Modules\Gdpr\Models\Consent;
use Modules\Gdpr\Models\Treatment;
use Modules\Gdpr\Enums\ConsentType;
>>>>>>> a12f125f4a (.)
=======
use Modules\Gdpr\Enums\ConsentType;
use Modules\Gdpr\Models\Consent;
use Modules\Gdpr\Models\Treatment;
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)

/**
 * Trait HasGdpr
 *
 * Provides GDPR-related functionality for Eloquent models.
 *
 * @property-read Collection<int, Consent> $consents
 * @property-read Collection<int, Consent> $activeConsents
<<<<<<< HEAD
=======
=======
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;
use Modules\Gdpr\Models\Consent;
use Modules\Gdpr\Models\Treatment;
use Modules\Gdpr\Enums\ConsentType;

/**
 * Trait HasGdpr
 * 
 * Provides GDPR-related functionality for Eloquent models.
 * 
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Consent> $consents
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Consent> $activeConsents
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
 */
trait HasGdpr
{
    /**
     * Get all consents for the model (polymorphic).
     *
<<<<<<< HEAD
     * @return MorphMany<Consent, $this>
=======
<<<<<<< HEAD
     * @return MorphMany<Consent, $this>
=======
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     */
    public function consents(): MorphMany
    {
        return $this->morphMany(Consent::class, 'user');
    }

    /**
     * Get only active (non-revoked) consents.
     *
<<<<<<< HEAD
     * @return MorphMany<Consent, $this>
=======
<<<<<<< HEAD
     * @return MorphMany<Consent, $this>
=======
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     */
    public function activeConsents(): MorphMany
    {
        return $this->consents()->whereNull('revoked_at');
    }
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
    
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
    /**
     * Get the treatments associated with the user through consents.
     *
     * @return HasManyThrough<Treatment, Consent, $this>
     */
    public function treatments()
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 5562af7 (.)
        return $this->hasManyThrough(Treatment::class, Consent::class, 'user_id', 'id', 'id', 'treatment_id')->where(
            'consents.user_type',
            get_class($this),
        ); // Foreign key on consents table // Foreign key on treatments table // Local key on users table // Local key on consents table
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    
    /**
     * Get the treatments associated with the user through consents.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough<\Modules\Gdpr\Models\Treatment, \Modules\Gdpr\Models\Consent, $this>
     */
    public function treatments()
    {
>>>>>>> origin/develop
        return $this->hasManyThrough(
            Treatment::class,
            Consent::class,
            'user_id', // Foreign key on consents table
            'id', // Foreign key on treatments table
            'id', // Local key on users table
            'treatment_id' // Local key on consents table
        )->where('consents.user_type', get_class($this));
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    }

    /**
     * Check if the user has given a specific consent.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     * @param  ConsentType|string  $type
     * @param  bool  $cached  Use cached version if available
     * @return bool
     */
    public function hasGivenConsent(ConsentType|string $type, bool $cached = true): bool
    {
<<<<<<< HEAD
        $type = ($type instanceof ConsentType) ? $type->value : $type;
        $cacheKey = 'user_' . ((string) $this->getKey()) . '_consent_' . $type;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $type = ($type instanceof ConsentType) ? $type->value : $type;
        $cacheKey = 'user_' . ((string) $this->getKey()) . '_consent_' . $type;

=======
        $type = $type instanceof ConsentType ? $type->value : $type;
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
        
>>>>>>> a12f125f4a (.)
=======
        $type = ($type instanceof ConsentType) ? $type->value : $type;
        $cacheKey = 'user_' . ((string) $this->getKey()) . '_consent_' . $type;

>>>>>>> b93ef594b4 (.)
=======
        $type = $type instanceof ConsentType ? $type->value : $type;
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
        
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        if ($cached && Cache::has($cacheKey)) {
            return (bool) Cache::get($cacheKey);
        }

<<<<<<< HEAD
        $hasConsent = $this->activeConsents()->where('type', $type)->exists();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $hasConsent = $this->activeConsents()->where('type', $type)->exists();
=======
        $hasConsent = $this->activeConsents()
            ->where('type', $type)
            ->exists();
>>>>>>> a12f125f4a (.)
=======
        $hasConsent = $this->activeConsents()->where('type', $type)->exists();
>>>>>>> b93ef594b4 (.)
=======
        $hasConsent = $this->activeConsents()
            ->where('type', $type)
            ->exists();
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)

        Cache::put($cacheKey, $hasConsent, now()->addDay());

        return $hasConsent;
    }

    /**
     * Give consent for a specific type.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
     *
     * @param  ConsentType|string  $type
     * @param  array<string, mixed>  $metadata
     * @return Consent
     */
    public function giveConsent(ConsentType|string $type, array $metadata = []): Consent
    {
<<<<<<< HEAD
        $type = ($type instanceof ConsentType) ? $type->value : $type;

        /** @var Consent $consent */
=======
<<<<<<< HEAD
<<<<<<< HEAD
        $type = ($type instanceof ConsentType) ? $type->value : $type;

=======
        $type = $type instanceof ConsentType ? $type->value : $type;
        
>>>>>>> a12f125f4a (.)
=======
        $type = ($type instanceof ConsentType) ? $type->value : $type;

>>>>>>> b93ef594b4 (.)
        /** @var Consent $consent */
=======
     * 
     * @param  ConsentType|string  $type
     * @param  array<string, mixed>  $metadata
     * @return \Modules\Gdpr\Models\Consent
     */
    public function giveConsent(ConsentType|string $type, array $metadata = []): Consent
    {
        $type = $type instanceof ConsentType ? $type->value : $type;
        
        /** @var \Modules\Gdpr\Models\Consent $consent */
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        $consent = $this->consents()->create([
            'type' => $type,
            'metadata' => $metadata,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'accepted_at' => now(),
        ]);

        $this->clearConsentCache($type);
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
        return $consent;
    }

    /**
     * Revoke a specific consent.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     * @param  ConsentType|string  $type
     * @return bool
     */
    public function revokeConsent(ConsentType|string $type): bool
    {
<<<<<<< HEAD
        $type = ($type instanceof ConsentType) ? $type->value : $type;

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $type = ($type instanceof ConsentType) ? $type->value : $type;

=======
        $type = $type instanceof ConsentType ? $type->value : $type;
        
>>>>>>> a12f125f4a (.)
=======
        $type = ($type instanceof ConsentType) ? $type->value : $type;

>>>>>>> b93ef594b4 (.)
=======
        $type = $type instanceof ConsentType ? $type->value : $type;
        
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        $updated = $this->activeConsents()
            ->where('type', $type)
            ->update([
                'revoked_at' => now(),
                'revoked_ip_address' => request()->ip(),
            ]);

        if ($updated > 0) {
            $this->clearConsentCache($type);
            return true;
        }

        return false;
    }

    /**
     * Clear cached consent status.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     * @param  string  $type
     * @return void
     */
    protected function clearConsentCache(string $type): void
    {
<<<<<<< HEAD
        $cacheKey = 'user_' . ((string) $this->getKey()) . '_consent_' . $type;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $cacheKey = 'user_' . ((string) $this->getKey()) . '_consent_' . $type;
=======
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
>>>>>>> a12f125f4a (.)
=======
        $cacheKey = 'user_' . ((string) $this->getKey()) . '_consent_' . $type;
>>>>>>> b93ef594b4 (.)
=======
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
        Cache::forget($cacheKey);
    }

    /**
     * Get all required consents that the user hasn't given yet.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     * @return array<string, string>
     */
    public function getMissingRequiredConsents(): array
    {
<<<<<<< HEAD
        $givenConsents = $this->activeConsents()->pluck('type')->toArray();

        return array_diff(ConsentType::getRequiredConsentTypes(), $givenConsents);
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $givenConsents = $this->activeConsents()->pluck('type')->toArray();

        return array_diff(ConsentType::getRequiredConsentTypes(), $givenConsents);
=======
=======
>>>>>>> origin/develop
        $givenConsents = $this->activeConsents()
            ->pluck('type')
            ->toArray();

        return array_diff(
            ConsentType::getRequiredConsentTypes(),
            $givenConsents
        );
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        $givenConsents = $this->activeConsents()->pluck('type')->toArray();

        return array_diff(ConsentType::getRequiredConsentTypes(), $givenConsents);
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    }

    /**
     * Check if user has given all required consents.
<<<<<<< HEAD
     *
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> a12f125f4a (.)
=======
     *
>>>>>>> b93ef594b4 (.)
=======
     * 
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
     * @return bool
     */
    public function hasAllRequiredConsents(): bool
    {
        return empty($this->getMissingRequiredConsents());
    }
}
