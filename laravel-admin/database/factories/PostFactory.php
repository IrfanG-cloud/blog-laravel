<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
        $images = [
            'https://picsum.photos/1600/900/?random',
            'https://source.unsplash.com/random/1600x900',
            'https://loremflickr.com/1600/900',
            'https://baconmockup.com/1600/900',
        ];
        $title = fake()->sentence(mt_rand(3, 10));
    
        return [
            'title'             => $title,
            'slug'              => Str::slug($title),
            'subtitle'          => fake()->sentence(mt_rand(10, 20)),
            'post_image'        => $images[mt_rand(0, 3)],
            'content_raw'       => implode("\n\n", fake()->paragraphs(mt_rand(3, 6))),
            'published_at'      => fake()->dateTimeBetween('-1 month', '+3 days'),
            'user_id'            => mt_rand(1, 10),
            'meta_description'  => "Meta for $title",
            'is_draft'          => rand(0, 1),
            'layout'            => 'blog.post-layouts.standard',
        ];
    }
}
