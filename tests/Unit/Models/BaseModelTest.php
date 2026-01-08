<?php

declare(strict_types=1);

namespace Modules\Gdpr\Tests\Unit\Models;

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
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);
>>>>>>> 95dc6c2f (.)

beforeEach(function () {
    $this->baseModel = new class extends BaseModel
    {
        protected $table = 'test_gdpr_table';
    };
});

test('base model extends eloquent model', function () {
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has correct table name', function () {
    expect($this->baseModel->getTable())->toBe('test_gdpr_table');
});

test('base model can be instantiated', function () {
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
});

test('base model has proper inheritance chain', function () {
    expect($this->baseModel)->toBeInstanceOf(BaseModel::class);
    expect($this->baseModel)->toBeInstanceOf(Model::class);
});

test('base model has timestamps enabled', function () {
    expect($this->baseModel)->usesTimestamps()->toBeTrue();
});
