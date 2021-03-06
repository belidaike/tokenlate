<?php

namespace Database\Factories;

use App\Models\Studentinformations;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentinformationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Studentinformations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->word,
        'Age' => $this->faker->randomDigitNotNull,
        'ContactNO' => $this->faker->randomDigitNotNull,
        'Address' => $this->faker->word,
        'Gender' => $this->faker->word,
        'Citizenship' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
