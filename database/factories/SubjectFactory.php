<?php

namespace Database\Factories;

use App\Models\Lecturer;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->text(5).strval(random_int(1000, 9999)),
            'name' => fake()->name(),
            'credit_number' => random_int(2, 4),
            'start_date' => Carbon::now()->subMonth(random_int(1, 10)),
            'end_date' => Carbon::now()->addMonth(random_int(0, 9)),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'lecturer_id' => fake()->randomElement(Lecturer::pluck('lecturer_id')),
        ];
    }
}
