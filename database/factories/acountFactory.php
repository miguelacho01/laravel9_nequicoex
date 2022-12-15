<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class acountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'NumberAcount' => $this->faker->phoneNumber(),
            'balance' => $this->faker->numberBetween(20,300),
            'user_id' => User::all()->random()->id
        ];
    }
}
