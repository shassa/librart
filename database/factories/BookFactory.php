<?php

namespace Database\Factories;

use App\Models\book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = book::class;

    public function definition()
    {
        return [
            'title_ar'=>$this->faker->name(),
            'title_en'=>$this->faker->name(),
            'description_ar'=>$this->faker->paragraph(),
            'description_en'=>$this->faker->paragraph(),
            'author'=>$this->faker->name(),
            'isbn'=>$this->faker->numberBetween(6,10),
            'images'=>$this->faker->image('public/storage/images',400,300),
        ];
    }
}
