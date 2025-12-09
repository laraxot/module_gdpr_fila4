<?php

declare(strict_types=1);

namespace Modules\Gdpr\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Gdpr\Models\Profile;

/**
 * @extends Factory<Profile>
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
<<<<<<< HEAD
     * @return array<string, mixed>
     */
    public function definition(): array {
=======
     * @return array
     */
    public function definition()
    {
>>>>>>> a074f99 (.)
        return [
            'id' => fake()->word,
            'user_id' => fake()->unique()->randomNumber(),
            'phone' => fake()->phoneNumber,
            'email' => fake()->email,
            'bio' => fake()->text,
        ];
    }
}
