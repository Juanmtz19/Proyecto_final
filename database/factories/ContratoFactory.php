<?php

namespace Database\Factories;

use App\Models\Contrato;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContratoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contrato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'grup'          =>$this->faker->word,
        'grup2'         =>$this->faker->word,
        'eventName'     =>$this->faker->word,
        'city'          =>$this->faker->word,
        'place'         =>$this->faker->word,
        'stage'         =>$this->faker->word,
        'date'           => $this->faker->numberBetween($min = 1000, $max = 100000),
        'capacity'      => $this->faker->randomDigitNot(2,3,4,5,7,8),
        'payment'       => $this->faker->randomDigitNot(2,4,6,8),
        'description'   => $this->faker->text($maxNbChars = 150),
        'comment'       => $this->faker->text($maxNbChars = 100),
        'available'      => $this->faker->randomDigitNot(2,3,4,5,6,7,8,9),
        ];
    }
}
