<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Assignment;
use App\Models\ExerciseFile;
use App\Models\Lecture;
use App\Models\Lecturer;
use App\Models\Student;
use App\Models\StudentExercise;
use App\Models\Subject;
use Database\Factories\StudentExerciseFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $lecturers = Lecturer::factory()
                            ->count(10)
                            ->create();
        $students = Student::factory()
                            ->count(30)
                            ->create();
        $subjects = Subject::factory()
                            ->count(20)
                            ->hasAttached($students)
                            ->create();
        $assignments = Assignment::factory()
                            ->count(50)
                            ->create();
        $lectures = Lecture::factory()
                            ->count(50)
                            ->create();
        $student_exercises = StudentExercise::factory()
                            ->count(100)
                            ->has(
                                ExerciseFile::factory()->count(random_int(1,3)),
                                'exerciseFile',
                            )
                            ->create();               

    }
}
