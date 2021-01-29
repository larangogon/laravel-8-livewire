<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'price' => $this->faker->numberBetween(300, 100000),
            'description' => $this->faker->sentence(10),
            'image' => $this->faker->imageUrl(1280,720),

            'user_id' => rand(1,10),
            'category_id' => rand(1,5)
        ];
    }
}
