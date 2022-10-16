<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => fake()->image(storage_path('app/public/images'),640,480, null, false),
           // 'image' => fake()->image(storage_path('app/public'), 50,50, null,false),

        ];
    }
}
