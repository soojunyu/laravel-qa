<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> rtrim(fake()->sentence(rand(5,10)),"."),
            'body'=> fake()->paragraphs(rand(3,7), true),
            'views'=> rand(0,10),
            'answers'=> rand(0,10),
            'votes'=> rand(-3,10)
        ];
    }
}
