<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{

    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'surname' => $this->faker->lastName,
            'age' => $this->faker->numberBetween(18, 27),
            'city' => $this->faker->city,
            'position_id' => $this->faker->numberBetween(1, 3),
            'level_id' => $this->faker->numberBetween(1, 3)
        ];
    }
}
