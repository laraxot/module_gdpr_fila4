<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models\Traits;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;
use Modules\Gdpr\Enums\ConsentType;
use Modules\Gdpr\Models\Consent;
use Modules\Gdpr\Models\Treatment;

/**
 * Trait HasGdpr
 *
 * Provides GDPR-related functionality for Eloquent models.
 *
 * @property-read Collection<int, Consent> $consents
 * @property-read Collection<int, Consent> $activeConsents
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
>>>>>>> 5a85228 (.)
 */
trait HasGdpr
{
    /**
     * Get all consents for the model (polymorphic).
     *
<<<<<<< HEAD
     * @return MorphMany<Consent, $this>
=======
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
>>>>>>> 5a85228 (.)
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
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<\Modules\Gdpr\Models\Consent, $this>
>>>>>>> 5a85228 (.)
     */
    public function activeConsents(): MorphMany
    {
        return $this->consents()->whereNull('revoked_at');
    }
<<<<<<< HEAD

    /**
     * Get the treatments associated with the user through consents.
     *
     * @return HasManyThrough<Treatment, Consent, $this>
     */
    public function treatments()
    {
        return $this->hasManyThrough(Treatment::class, Consent::class, 'user_id', 'id', 'id', 'treatment_id')->where(
            'consents.user_type',
            get_class($this),
        ); // Foreign key on consents table // Foreign key on treatments table // Local key on users table // Local key on consents table
=======
    
    /**
     * Get the treatments associated with the user through consents.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough<\Modules\Gdpr\Models\Treatment, \Modules\Gdpr\Models\Consent, $this>
     */
    public function treatments(): void {
        return $this->hasManyThrough(
            Treatment::class,
            Consent::class,
            'user_id', // Foreign key on consents table
            'id', // Foreign key on treatments table
            'id', // Local key on users table
            'treatment_id' // Local key on consents table
        )->where('consents.user_type', get_class($this));
>>>>>>> 5a85228 (.)
    }

    /**
     * Check if the user has given a specific consent.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 5a85228 (.)
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
        $type = $type instanceof ConsentType ? $type->value : $type;
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
        
>>>>>>> 5a85228 (.)
        if ($cached && Cache::has($cacheKey)) {
            return (bool) Cache::get($cacheKey);
        }

<<<<<<< HEAD
        $hasConsent = $this->activeConsents()->where('type', $type)->exists();
=======
        $hasConsent = $this->activeConsents()
            ->where('type', $type)
            ->exists();
>>>>>>> 5a85228 (.)

        Cache::put($cacheKey, $hasConsent, now()->addDay());

        return $hasConsent;
    }

    /**
     * Give consent for a specific type.
<<<<<<< HEAD
     *
     * @param  ConsentType|string  $type
     * @param  array<string, mixed>  $metadata
     * @return Consent
     */
    public function giveConsent(ConsentType|string $type, array $metadata = []): Consent
    {
        $type = ($type instanceof ConsentType) ? $type->value : $type;

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
>>>>>>> 5a85228 (.)
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
        
>>>>>>> 5a85228 (.)
        return $consent;
    }

    /**
     * Revoke a specific consent.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 5a85228 (.)
     * @param  ConsentType|string  $type
     * @return bool
     */
    public function revokeConsent(ConsentType|string $type): bool
    {
<<<<<<< HEAD
        $type = ($type instanceof ConsentType) ? $type->value : $type;

=======
        $type = $type instanceof ConsentType ? $type->value : $type;
        
>>>>>>> 5a85228 (.)
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
     * 
>>>>>>> 5a85228 (.)
     * @param  string  $type
     * @return void
     */
    protected function clearConsentCache(string $type): void
    {
<<<<<<< HEAD
        $cacheKey = 'user_' . ((string) $this->getKey()) . '_consent_' . $type;
=======
        $cacheKey = 'user_' . (string) $this->getKey() . '_consent_' . $type;
>>>>>>> 5a85228 (.)
        Cache::forget($cacheKey);
    }

    /**
     * Get all required consents that the user hasn't given yet.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 5a85228 (.)
     * @return array<string, string>
     */
    public function getMissingRequiredConsents(): array
    {
<<<<<<< HEAD
        $givenConsents = $this->activeConsents()->pluck('type')->toArray();

        return array_diff(ConsentType::getRequiredConsentTypes(), $givenConsents);
=======
        $givenConsents = $this->activeConsents()
            ->pluck('type')
            ->toArray();

        return array_diff(
            ConsentType::getRequiredConsentTypes(),
            $givenConsents
        );
>>>>>>> 5a85228 (.)
    }

    /**
     * Check if user has given all required consents.
<<<<<<< HEAD
     *
=======
     * 
>>>>>>> 5a85228 (.)
     * @return bool
     */
    public function hasAllRequiredConsents(): bool
    {
        return empty($this->getMissingRequiredConsents());
    }
}
