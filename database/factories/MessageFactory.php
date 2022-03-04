<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::pluck('id');
        $statuses = Status::pluck('id');
        return [
            'message' => 'message' . $this->faker->unique()->numberBetween('0', '20'),
            'user_id' => $this->faker->randomElement($users),
            'status_id' => $this->faker->randomElement($statuses),
        ];
    }
}
