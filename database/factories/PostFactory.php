<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    //$factory->define(Post::class, function(faker $faker) {
    //$title = $faker->sentence;
    //});
    
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'slug'  => Str::slug($this->faker->title),
            'body'  => $this->faker->text
        ];
    }
}

