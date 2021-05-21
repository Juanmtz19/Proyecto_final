<?php

namespace Database\Factories;

use App\Models\Guitar;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuitarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guitar::class;

    /**
     * Define the model's default state.
     *
     * @return array
   */
  public function definition()
  {
      return [
          'brand'          => $this->faker->word,
          'color'          => $this->faker->colorName,
          'spanish'        => $this->faker->word,
          'classic'        => $this->faker->word,
          'description'    => $this->faker->text($maxNbChars = 100),
          'comment'        => $this->faker->text($maxNbChars = 100),
          'number'         => $this->faker->numberBetween($min = 1000, $max = 100000),
          'available'      => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
         
        
      ];
  }
}
