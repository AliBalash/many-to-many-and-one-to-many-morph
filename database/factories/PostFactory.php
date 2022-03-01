<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::pluck('id');
        return [
            'title' => 'title' . $this->faker->unique()->numberBetween(1, 20),
            'body' => $this->faker->text(200),
            'user_id' => $this->faker->randomElement($users),

        ];
    }
}
