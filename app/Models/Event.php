<?php

/**
 * @see https://github.com/foothing/laravel-gdpr-consent
 */

declare(strict_types=1);

namespace Modules\Gdpr\Models;

<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Gdpr\Database\Factories\EventFactory;
use Illuminate\Database\Eloquent\Builder;
=======
<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Gdpr\Database\Factories\EventFactory;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Crypt;
use Modules\Xot\Contracts\ProfileContract;

use function Safe\json_encode;

/**
 * Modules\Gdpr\Models\Event.
 *
 * @property string $id
 * @property string|null                     $treatment_id
 * @property string|null                     $consent_id
 * @property string $subject_id
 * @property string $ip
 * @property string $action
 * @property string $payload
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Consent|null                    $consent
 * @method static EventFactory factory($count = null, $state = [])
 * @method static Builder|Event newModelQuery()
 * @method static Builder|Event newQuery()
 * @method static Builder|Event query()
 * @method static Builder|Event whereAction($value)
 * @method static Builder|Event whereConsentId($value)
 * @method static Builder|Event whereCreatedAt($value)
 * @method static Builder|Event whereId($value)
 * @method static Builder|Event whereIp($value)
 * @method static Builder|Event wherePayload($value)
 * @method static Builder|Event whereSubjectId($value)
 * @method static Builder|Event whereTreatmentId($value)
 * @method static Builder|Event whereUpdatedAt($value)
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static Builder|Event whereCreatedBy($value)
 * @method static Builder|Event whereDeletedAt($value)
 * @method static Builder|Event whereDeletedBy($value)
 * @method static Builder|Event whereUpdatedBy($value)
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property Consent|null                    $consent
 * @method static \Modules\Gdpr\Database\Factories\EventFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Event   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereConsentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereUpdatedAt($value)
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedBy($value)
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
 * @property string $id
 * @property string|null                     $treatment_id
 * @property string|null                     $consent_id
 * @property string $subject_id
 * @property string $ip
 * @property string $action
 * @property string $payload
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5562af7 (.)
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property Consent|null                    $consent
 * @method static EventFactory factory($count = null, $state = [])
 * @method static Builder|Event newModelQuery()
 * @method static Builder|Event newQuery()
 * @method static Builder|Event query()
 * @method static Builder|Event whereAction($value)
 * @method static Builder|Event whereConsentId($value)
 * @method static Builder|Event whereCreatedAt($value)
 * @method static Builder|Event whereCreatedBy($value)
 * @method static Builder|Event whereDeletedAt($value)
 * @method static Builder|Event whereDeletedBy($value)
 * @method static Builder|Event whereId($value)
 * @method static Builder|Event whereIp($value)
 * @method static Builder|Event wherePayload($value)
 * @method static Builder|Event whereSubjectId($value)
 * @method static Builder|Event whereTreatmentId($value)
 * @method static Builder|Event whereUpdatedAt($value)
 * @method static Builder|Event whereUpdatedBy($value)
<<<<<<< HEAD
=======
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @property Consent|null                    $consent
 * @method static \Modules\Gdpr\Database\Factories\EventFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Event   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereConsentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereTreatmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event   whereUpdatedBy($value)
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperEvent
 * @mixin \Eloquent
 */
class Event extends BaseModel
{
    use HasUuids;

    // protected $table = 'event';

    public $fillable = [
        'id',
        'action',
        'treatment_id',
        'consent_id',
        'subject_id',
        'payload',
    ];

    public function consent(): BelongsTo
    {
        return $this->belongsTo(Consent::class);
    }

<<<<<<< HEAD
    public function setPayloadAttribute(null|string $value): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function setPayloadAttribute(null|string $value): void
=======
    public function setPayloadAttribute(?string $value): void
>>>>>>> a12f125f4a (.)
=======
    public function setPayloadAttribute(null|string $value): void
>>>>>>> b93ef594b4 (.)
=======
    public function setPayloadAttribute(?string $value): void
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    {
        $this->attributes['payload'] = Crypt::encrypt(json_encode($value, JSON_THROW_ON_ERROR));
    }

<<<<<<< HEAD
    public function setIpAttribute(null|string $value): void
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function setIpAttribute(null|string $value): void
=======
    public function setIpAttribute(?string $value): void
>>>>>>> a12f125f4a (.)
=======
    public function setIpAttribute(null|string $value): void
>>>>>>> b93ef594b4 (.)
=======
    public function setIpAttribute(?string $value): void
>>>>>>> origin/develop
>>>>>>> 5562af7 (.)
    {
        $this->attributes['ip'] = Crypt::encrypt($value);
    }
}
