<?php

declare(strict_types=1);

namespace Modules\Gdpr\Tests\Unit\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
use Modules\Gdpr\Models\BaseModel;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
use Modules\Gdpr\Models\BaseModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 5a85228 (.)
>>>>>>> ead2100a (.)
=======
use Modules\Gdpr\Models\BaseModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Model;
>>>>>>> 4f72b08a (.)
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);
>>>>>>> 95dc6c2f (.)

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
