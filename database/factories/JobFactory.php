<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'role_id' => $this->faker->numberBetween(1,102),
            'company_id'=> 1,
            'job_type' => "part time",
            'skills' => 'php, html, python, django, js, ds, c++',
            'eligibility' => 'bca, btech, bsc, be',
            'description' => $this->faker->text(),
            'experience' => '0-5',
            'salary' => $this->faker->numberBetween(100000,1020000)
        ];
    }
}
