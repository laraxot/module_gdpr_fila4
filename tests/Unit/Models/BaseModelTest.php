<?php

declare(strict_types=1);

namespace Modules\Gdpr\Tests\Unit\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Gdpr\Models\BaseModel;
<<<<<<< HEAD
=======
use Tests\TestCase;
>>>>>>> adb2503 (.)

test('base model extends eloquent model', function (): void {
    $model = new class extends BaseModel
    {
        /** @var string */
        protected $table = 'test_gdpr_table';
    };

    expect($model)->toBeInstanceOf(Model::class);
});

test('base model has correct table name', function (): void {
    $model = new class extends BaseModel
    {
        /** @var string */
        protected $table = 'test_gdpr_table';
    };

    expect($model->getTable())->toBe('test_gdpr_table');
});

test('base model can be instantiated', function (): void {
    $model = new class extends BaseModel
    {
        /** @var string */
        protected $table = 'test_gdpr_table';
    };

    expect($model)->toBeInstanceOf(BaseModel::class);
});

test('base model has proper inheritance chain', function (): void {
    $model = new class extends BaseModel
    {
        /** @var string */
        protected $table = 'test_gdpr_table';
    };

    expect($model)->toBeInstanceOf(BaseModel::class);
    expect($model)->toBeInstanceOf(Model::class);
});

test('base model has timestamps enabled', function (): void {
    $model = new class extends BaseModel
    {
        /** @var string */
        protected $table = 'test_gdpr_table';
    };

    expect($model->usesTimestamps())->toBeTrue();
});
