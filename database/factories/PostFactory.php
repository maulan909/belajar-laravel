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
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 8)),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'slug' => $this->faker->unique()->slug(mt_rand(3, 6)),
            'excerpt' => $this->faker->paragraph(3),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(8, 10))) . '</p>' //gabung antar array dengan glue tag paragraf
            'body' => collect($this->faker->paragraphs(mt_rand(8, 10)))->map(function ($p) {
                return "<p>$p</p>";
            })->implode('') // menggunakan collection dan method collection map untuk menyusun array baru, dan di implode

        ];
    }
}
