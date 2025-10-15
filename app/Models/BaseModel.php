<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

/**
 * Class BaseModel.
 *
 * Base model for GDPR module.
 * Extends XotBaseModel for common functionality.
 */
abstract class BaseModel extends \Modules\Xot\Models\XotBaseModel
{
    /** @var string Database connection name */
    protected $connection = 'user';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            // Module-specific casts only
            'verified_at' => 'datetime',
        ]);
    }
}
