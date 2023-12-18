<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ExerciseFileController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentExerciseController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::controller(AssignmentController::class)->group(function() {
    Route::get('/assignments/{assignment}/exercises', 'getExercises');
    Route::apiResources('assignments');
});

Route::controller(ExerciseFileController::class)->group(function() {
    Route::apiResources('exercises_files');
});

Route::controller(LectureController::class)->group(function() {
    Route::apiResources('lectures');
});

Route::controller(LecturerController::class)->group(function() {
    Route::get('/lecturers/{lecturer}/subjects', 'getSubjects');
    Route::get('/lecturers/{lecturer}/assignments', 'getAssignments');
    Route::get('/lecturers/{lecturer}/lectures', 'getLectures');
    Route::apiResources('lecturers');
});

Route::controller(StudentController::class)->group(function() {
    Route::get('/students/{student}/subjects', 'getSubjects');
    Route::get('/students/{student}/exercises', 'getExercises');
    Route::get('/students/{student}/assignments', 'getAssignments');
    Route::apiResources('students');
});

Route::controller(StudentExerciseController::class)->group(function() {
    Route::get('/exercises/{student_exercise}/exercise_files', 'getExercisesFile');
    Route::get('/exercises/{student_exercise}/assignment', 'getAssignment');
    Route::apiResources('exercises');
});

Route::controller(SubjectController::class)->group(function() {
    Route::get('/subjects/{subject}/students', 'getStudents');
    Route::get('/subjects/{subject}/lecturer', 'getLecturer');
    Route::get('/subjects/{subject}/assignments', 'getAssignments');
    Route::get('/subjects/{subject}/lectures', 'getLectures');
});