<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\policy>
 */
class policyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $policytype=['Health', 'Life', 'Bike','Car'];
        $a=$this->faker->numberBetween(0,3);
        return [
                // 'companyid'(
                'policyname'=> $this->faker->name,
                'companyid' => Company::all()->pluck('id')->random(),
                'policytype'=>  $policytype[$a],
                'policydesc' => $this->faker->text,
                'policyprice' =>$this->faker->numberBetween(1000,5000),
                'claimprice' => $this->faker->numberBetween(20000,50000),
                'timeperiod' => $this->faker->numberBetween(1,24),  //
        ];
    }
}
