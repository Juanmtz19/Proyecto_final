<?php

namespace Database\Factories;

use App\Models\Keyboard;
use Illuminate\Database\Eloquent\Factories\Factory;

class KeyboardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Keyboard::class;

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
            'sampler' => $this->faker->word,
            'color' => $this->faker->colorName,
            'case' => $this->faker->word,
            'tune'=> $this->faker->word,
            'pedal'=> $this->faker->word,
            'chac'=> $this->faker->word,
           'octaves' =>  $this->faker->randomDigitNot(1,6,9,8),
          // 'available' => $this->faker->randomDigitNot(2,3,4,5,6,7,9),
           'description' => $this->faker->text($maxNbChars = 100),
           'comment' => $this->faker->text($maxNbChars = 100),
           
        ];
    }
}
