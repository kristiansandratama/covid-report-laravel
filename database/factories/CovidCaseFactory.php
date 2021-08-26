<?php

namespace Database\Factories;

use App\Models\CovidCase;
use Illuminate\Database\Eloquent\Factories\Factory;

class CovidCaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CovidCase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'province' => $this->faker->city(),
            'confirmed' => random_int(100, 2000),
            'in_care' => random_int(100, 500),
            'recovered' => random_int(100, 1000),
            'dead' => random_int(100, 400),  
        ];
    }
}
