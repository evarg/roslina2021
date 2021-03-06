<?php

namespace Database\Factories;

use App\Models\Seed;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seed::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(2, true),
            'type' => $this->faker->sentence(3, false),
            'producer' => $this->faker->sentence(1, false),
            'expiration_time' => $this->faker->date()
        ];
    }
}