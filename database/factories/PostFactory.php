<?php

namespace Database\Factories; 

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
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

        $name = $this->faker->unique()->sentence();

        
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(150),
            'body' => $this->faker->text(2000),
            'status' =>$this->faker->randomElement([1, 2]),
            'category_id' => Category::all()->random()->id,
            'user_id' =>User::all()->random()->id,
            'name_it' => 'questo il nome di un post in ITALIANO',
            'extract_it' => $this->faker->text(150),
            'body_it' => $this->faker->text(2000),
        ];
    }
}
