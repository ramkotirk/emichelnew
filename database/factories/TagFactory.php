<?php

namespace Database\Factories;

use App\User;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

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
            'description' => $this->faker->sentence,
        ];
    }
}