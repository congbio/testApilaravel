<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RestauranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(1),
            'category_id' => rand(1,4),
            'amount' => $this->faker->unique()->randomDigit,
            'image'=>'hinh'.rand(1,4).'.jpg',     
        ];
    }
}