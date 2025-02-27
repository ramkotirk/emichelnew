<?php

namespace Database\Factories;

use App\User;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'title' => $this->faker->text(15),
                'slug' => $this->faker->slug,
                'description' => $this->faker->sentence(),
                'image' => $this->faker->imageUrl(),
                'online' => $this->faker->boolean(),
                'view_count' => $this->faker->randomDigit,
                'content' => $this->faker->paragraph(30),
                'author_id'  => function () {
                    // Get random genre id
                    return User::inRandomOrder()->first()->id;
                },
                'category_id'  => function () {
                    // Get random genre id
                    return Category::inRandomOrder()->first()->id;
                },
                
            ];
    }
}