<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           
            'document_number'=>$this->faker->randomNumber(5),
            'name'=>$this->faker->name(50),
            'sex'=>$this->faker->randomElement(['M','F','U']),
            'marital_status'=>$this->faker->randomElement(['S','C','V','D','U']),
            'date_of_birth'=>$this->faker->date(),
            'residence_address'=>$this->faker->address(),
            'stratum'=>$this->faker->randomElement(['1','2','3','4','5','6']),
            'residence_type'=>$this->faker->randomElement(['URBANA','RURAL']),
            'height'=>$this->faker->randomFloat(2,1,200),
            'institutional_email'=>$this->faker->email(),
            'cell_phone_number'=>$this->faker->phoneNumber(10),
        ];
    }
}
