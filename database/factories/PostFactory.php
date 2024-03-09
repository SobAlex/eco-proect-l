<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        return [
            'SEO_title' => 'Title-' . $this->faker->sentence(7),
            'SEO_description' => 'Desc-' . $this->faker->sentence(12),
            'title' => $this->faker->sentence(5),
            'content' => $this->faker->text(500),
            'image' => 'image.jpg',
            'category_id' => Category::get()->random()->id,
            'isPublick' => 1,
        ];
    }
}
