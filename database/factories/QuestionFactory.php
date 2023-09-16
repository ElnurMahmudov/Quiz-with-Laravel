<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Question::class;

    public function definition(): array
    {
        return [
            'quiz_id' => rand(1,10),
            'question' => $this->faker->sentence(rand(3,7)),
            'A' => $this->faker->sentence(rand(1,3)),
            'B' => $this->faker->sentence(rand(1,3)),
            'C' => $this->faker->sentence(rand(1,3)),
            'D' => $this->faker->sentence(rand(1,3)),
            'correct_answer' => rand(1,4)
        ];
    }
}
