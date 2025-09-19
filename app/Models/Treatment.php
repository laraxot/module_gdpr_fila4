<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Modules\Gdpr\Database\Factories\TreatmentFactory;
use Illuminate\Database\Eloquent\Builder;
=======
>>>>>>> 5a85228 (.)
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Modules\Xot\Contracts\ProfileContract;

/**
 * Modules\Gdpr\Models\Treatment.
 *
 * @property string $id
 * @property int                             $active
 * @property int                             $required
 * @property string $name
 * @property string $description
 * @property string|null                     $documentVersion
 * @property string|null                     $documentUrl
 * @property int                             $weight
<<<<<<< HEAD
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property Carbon|null $deleted_at
 * @method static TreatmentFactory factory($count = null, $state = [])
 * @method static Builder|Treatment newModelQuery()
 * @method static Builder|Treatment newQuery()
 * @method static Builder|Treatment query()
 * @method static Builder|Treatment whereActive($value)
 * @method static Builder|Treatment whereCreatedAt($value)
 * @method static Builder|Treatment whereDescription($value)
 * @method static Builder|Treatment whereDocumentUrl($value)
 * @method static Builder|Treatment whereDocumentVersion($value)
 * @method static Builder|Treatment whereId($value)
 * @method static Builder|Treatment whereName($value)
 * @method static Builder|Treatment whereRequired($value)
 * @method static Builder|Treatment whereUpdatedAt($value)
 * @method static Builder|Treatment whereWeight($value)
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static Builder|Treatment newModelQuery()
 * @method static Builder|Treatment newQuery()
 * @method static Builder|Treatment query()
 * @method static Builder|Treatment whereActive($value)
 * @method static Builder|Treatment whereCreatedAt($value)
 * @method static Builder|Treatment whereDescription($value)
 * @method static Builder|Treatment whereDocumentUrl($value)
 * @method static Builder|Treatment whereDocumentVersion($value)
 * @method static Builder|Treatment whereId($value)
 * @method static Builder|Treatment whereName($value)
 * @method static Builder|Treatment whereRequired($value)
 * @method static Builder|Treatment whereUpdatedAt($value)
 * @method static Builder|Treatment whereWeight($value)
 * @method static Builder|Treatment newModelQuery()
 * @method static Builder|Treatment newQuery()
 * @method static Builder|Treatment query()
 * @method static Builder|Treatment whereActive($value)
 * @method static Builder|Treatment whereCreatedAt($value)
 * @method static Builder|Treatment whereDescription($value)
 * @method static Builder|Treatment whereDocumentUrl($value)
 * @method static Builder|Treatment whereDocumentVersion($value)
 * @method static Builder|Treatment whereId($value)
 * @method static Builder|Treatment whereName($value)
 * @method static Builder|Treatment whereRequired($value)
 * @method static Builder|Treatment whereUpdatedAt($value)
 * @method static Builder|Treatment whereWeight($value)
 * @method static Builder|Treatment newModelQuery()
 * @method static Builder|Treatment newQuery()
 * @method static Builder|Treatment query()
 * @method static Builder|Treatment whereActive($value)
 * @method static Builder|Treatment whereCreatedAt($value)
 * @method static Builder|Treatment whereDescription($value)
 * @method static Builder|Treatment whereDocumentUrl($value)
 * @method static Builder|Treatment whereDocumentVersion($value)
 * @method static Builder|Treatment whereId($value)
 * @method static Builder|Treatment whereName($value)
 * @method static Builder|Treatment whereRequired($value)
 * @method static Builder|Treatment whereUpdatedAt($value)
 * @method static Builder|Treatment whereWeight($value)
 * @method static Builder|Treatment whereCreatedBy($value)
 * @method static Builder|Treatment whereDeletedAt($value)
 * @method static Builder|Treatment whereDeletedBy($value)
 * @method static Builder|Treatment whereUpdatedBy($value)
 * @property string|null $deleted_by
 * @method static TreatmentFactory factory($count = null, $state = [])
 * @method static Builder|Treatment newModelQuery()
 * @method static Builder|Treatment newQuery()
 * @method static Builder|Treatment query()
 * @method static Builder|Treatment whereActive($value)
 * @method static Builder|Treatment whereCreatedAt($value)
 * @method static Builder|Treatment whereCreatedBy($value)
 * @method static Builder|Treatment whereDeletedAt($value)
 * @method static Builder|Treatment whereDeletedBy($value)
 * @method static Builder|Treatment whereDescription($value)
 * @method static Builder|Treatment whereDocumentUrl($value)
 * @method static Builder|Treatment whereDocumentVersion($value)
 * @method static Builder|Treatment whereId($value)
 * @method static Builder|Treatment whereName($value)
 * @method static Builder|Treatment whereRequired($value)
 * @method static Builder|Treatment whereUpdatedAt($value)
 * @method static Builder|Treatment whereUpdatedBy($value)
 * @method static Builder|Treatment whereWeight($value)
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereWeight($value)
 * @property string|null                     $updated_by
 * @property string|null                     $created_by
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null                     $deleted_by
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment whereUpdatedBy($value)
 * @property string|null $deleted_by
 * @method static \Modules\Gdpr\Database\Factories\TreatmentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   query()
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereDocumentVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Treatment   whereWeight($value)
>>>>>>> 5a85228 (.)
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 * @mixin IdeHelperTreatment
 * @mixin \Eloquent
 */
class Treatment extends BaseModel
{
    use HasUuids;

    // protected $table = 'treatment';
    public $incrementing = false;

    protected $fillable = [''];
}
