<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraphs(3, true),
            'cover_image' => $this->faker->word(),
            'cover_image_caption' => $this->faker->word(),
            'meta_title' => $this->faker->word(),
            'meta_description' => $this->faker->text(),
            'meta_image' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'is_published' => $this->faker->boolean(),
            'category_id' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
