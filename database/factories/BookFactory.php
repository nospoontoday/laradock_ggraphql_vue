<?php

namespace Database\Factories;

use Facade\Ignition\Support\FakeComposer;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->catchPhrase(),
            'author' => $this->faker->name,
            'image'   => $this->faker->imageUrl(),
            'description' => $this->faker->text,
            'link' => $this->faker->url,
            'category_id' => 1,
        ];
    }
}
