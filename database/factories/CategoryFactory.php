<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'SEO_title' => 'Cat Title-' . $this->faker->sentence(7),
            'SEO_description' => 'Cat Desc-' . $this->faker->sentence(12),
            'slug' => $this->faker->word(1),
            'title' => $this->faker->sentence(5),
            'short_content' => $this->faker->text(100),
            'content' => $this->faker->text(500),
            'image' => 'uploads/category/default.jpg',
        ];
    }
}
