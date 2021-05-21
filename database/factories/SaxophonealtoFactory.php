<?php

namespace Database\Factories;

use App\Models\Saxophonealto;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaxophonealtoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Saxophonealto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'brand' => $this->faker->word,
           'mark' => $this->faker->word,
           'Register' => $this->faker->swiftBicNumber,
            'color'  => $this->faker->colorName,
          'description' => $this->faker->text($maxNbChars = 100),
            'Pieces' => $this->faker->numberBetween($min = 1000, $max = 1000),
            'charac'=> $this->faker->numberBetween($min = 1000, $max = 10000),
           'comment' => $this->faker->text($maxNbChars = 100),
          'available'  => $this->faker->randomDigitNot(2,3,4,5,6,7,9),
        ];
    }
}
