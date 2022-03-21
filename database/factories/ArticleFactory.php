<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(10, 20)),
            'author' => $this->faker->sentence(mt_rand(1, 3)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(1, 2)),
            'body' => $this->faker->paragraph(mt_rand(20, 30)),
            'user_id' => mt_rand(1, 7),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
