<?php

declare(strict_types=1);

namespace Modules\Gdpr\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Gdpr\Models\Treatment;

/**
<<<<<<< HEAD
 * @extends Factory<Treatment>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Gdpr\Models\Treatment>
>>>>>>> 5a85228 (.)
 */
class TreatmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Treatment>
     */
    protected $model = Treatment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
<<<<<<< HEAD
        return [];
=======
        return [
        ];
>>>>>>> 5a85228 (.)
    }
}
