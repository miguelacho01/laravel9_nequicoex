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
            'NumberAcount' => fake()->randomNumber(9),
            'balance' => fake()->numberBetween(20000,30000000),
            'user_id' => User::factory()->create()->id
        ];
    }
}
