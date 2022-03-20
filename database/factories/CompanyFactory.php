<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'register_number'=>$this->faker->unique()->numberBetween(13140000,1399999999),
            'name'=>$this->faker->name,
            'about'=>$this->faker->text,
            //
        ];
    }
}
