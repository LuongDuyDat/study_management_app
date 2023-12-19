<?php

namespace Database\Factories;

use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecture>
 */
class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lecture_file' => fake()->url,
            'start_at' => Carbon::now()->subMonth(random_int(1, 10)),
            'end_at' => Carbon::now()->addMonth(random_int(0,9)),
            'subject_id' => fake()->randomElement(Subject::pluck('subject_id')),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(), 
        ];
    }
}
