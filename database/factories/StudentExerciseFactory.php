<?php

namespace Database\Factories;

use App\Models\Assignment;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentExercise>
 */
class StudentExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'result' => fake()->randomFloat(0, 10),
            'comment' => fake()->paragraph(2),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'student_id' => fake()->randomElement(Student::pluck('student_id')),
            'assignment_id' => fake()->randomElement(Assignment::pluck('assignment_id')),
        ];
    }
}
