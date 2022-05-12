<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'published_at' => Carbon::now(),
        ];
    }
}
