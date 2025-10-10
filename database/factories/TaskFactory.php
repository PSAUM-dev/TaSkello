<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake() -> text('40'),
            "user_id" => User::inRandomOrder()->first()->id,
            
            "status" => function () {
                $state = ['not_started', 'started', 'finished'];
                return $state[random_int(0, count($state) -1)];
            },

            "description" => fake() -> text()
        ];
    }
}
