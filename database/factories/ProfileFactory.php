<?php

declare(strict_types=1);

namespace Modules\Gdpr\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Gdpr\Models\Profile;

/**
<<<<<<< HEAD
 * @extends Factory<Profile>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Gdpr\Models\Profile>
>>>>>>> 5a85228 (.)
 */
class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Profile>
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
<<<<<<< HEAD
    public function definition()
    {
=======
    public function definition(): void {
>>>>>>> 5a85228 (.)
        return [
            'id' => fake()->word,
            'user_id' => fake()->unique()->randomNumber(),
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'bio' => fake()->text,
        ];
    }
}
