<?php

use App\Http\Controllers\Api\ApiAssignmentController;
use App\Http\Controllers\Api\ApiExerciseFileController;
use App\Http\Controllers\Api\ApiLectureController;
use App\Http\Controllers\Api\ApiLecturerController;
use App\Http\Controllers\Api\ApiStudentController;
use App\Http\Controllers\Api\ApiStudentExerciseController;
use App\Http\Controllers\Api\ApiSubjectController;
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

Route::controller(ApiAssignmentController::class)->group(function() {
    Route::get('/assignments/{assignment}/exercises', 'getExercises');
    Route::apiResource('assignments', ApiAssignmentController::class);
});

Route::controller(ApiExerciseFileController::class)->group(function() {
    Route::apiResource('exercises_files', ApiExerciseFileController::class);
});

Route::controller(ApiLectureController::class)->group(function() {
    Route::apiResource('lectures', ApiLectureController::class);
});

Route::controller(ApiLecturerController::class)->group(function() {
    Route::get('/lecturers/{lecturer}/subjects', 'getSubjects');
    Route::get('/lecturers/{lecturer}/assignments', 'getAssignments');
    Route::get('/lecturers/{lecturer}/lectures', 'getLectures');
    Route::apiResource('lecturers', ApiLecturerController::class);
});

Route::controller(ApiStudentController::class)->group(function() {
    Route::get('/students/{student}/subjects', 'getSubjects');
    Route::get('/students/{student}/exercises', 'getExercises');
    Route::get('/students/{student}/assignments', 'getAssignments');
    Route::apiResource('students', ApiStudentController::class);
});

Route::controller(ApiStudentExerciseController::class)->group(function() {
    Route::get('/exercises/{student_exercise}/exercise_files', 'getExercisesFile');
    Route::get('/exercises/{student_exercise}/assignment', 'getAssignment');
    Route::apiResource('exercises', ApiStudentExerciseController::class);
});

Route::controller(ApiSubjectController::class)->group(function() {
    Route::get('/subjects/{subject}/students', 'getStudents');
    Route::get('/subjects/{subject}/lecturer', 'getLecturer');
    Route::get('/subjects/{subject}/assignments', 'getAssignments');
    Route::get('/subjects/{subject}/lectures', 'getLectures');
    Route::apiResource('subjects', ApiSubjectController::class);
});