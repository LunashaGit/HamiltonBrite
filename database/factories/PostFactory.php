<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'date_start' => $this->faker->dateTimeBetween('0 week', '+8 week'),
            'date_end' => $this->faker->dateTimeBetween('+8 week', '+10 week'),
            'start_hour' => $this->faker->time,
            'end_hour' => $this->faker->time,
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'latitude' => $this->faker->latitude,
            'longitude' => $this->faker->longitude,
            'image' => $this->faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg')
        ];
    }
}
