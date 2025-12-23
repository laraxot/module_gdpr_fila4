<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Relations\Pivot;
// //use Laravel\Scout\Searchable;
use Modules\Xot\Traits\Updater;
=======
use Modules\Xot\Models\XotBasePivot;
>>>>>>> laraxot/develop

/**
 * Class BasePivot.
 */
<<<<<<< HEAD
abstract class BasePivot extends Pivot
{
    use Updater;

    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    /** @var bool */
    public $incrementing = true;

    /** @var int */
    protected $perPage = 30;

    // use Searchable;
    /** @var string */
    protected $connection = 'user';

    /** @var list<string> */
    protected $appends = [];

    /** @var string */
    protected $primaryKey = 'id';

    /** @var string */
    protected $keyType = 'string';

    /** @return array<string, string> */
    protected function casts(): array
    {
        return [
            'id' => 'string', // must be string else primary key of related model will be typed as int
            'uuid' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',
        ];
    }
=======
abstract class BasePivot extends XotBasePivot
{
    protected $connection = 'gdpr';
>>>>>>> laraxot/develop
}
