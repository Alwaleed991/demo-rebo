<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'title' => fake()->jobTitle(),
             'employer_id' => Employer::factory(), //“Before creating the Job, create an Employer first, then take its id and put it into employer_id. ---- and internally does this: $tempEmployer = Employer::factory()->create(); 'employer_id' => $tempEmployer->id -----you're just passing a factory instance instead of a direct integer. Laravel then understands that it needs to create the employer for you and use its ID. ;
             'salary' => "$50,000"
        ];
    }
}


//when you generate a factory, it’s best practice to link it to the specific model it’s intended for. This way, you can conveniently use something like Job::factory() to generate test data for that model without any extra steps.