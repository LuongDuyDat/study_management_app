<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AssignmentResource;
use App\Http\Resources\ExerciseFileResource;
use App\Http\Resources\StudentExerciseResource;
use App\Models\Student;
use App\Models\StudentExercise;
use Illuminate\Http\Request;

class ApiStudentExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new StudentExerciseResource(StudentExercise::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new StudentExerciseResource(StudentExercise::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentExercise $studentExercise)
    {
        return new StudentExerciseResource($studentExercise);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentExercise $studentExercise)
    {
        $studentExercise->update($request->all());
        return new StudentExerciseResource($studentExercise);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentExercise $studentExercise)
    {
        $studentExercise->delete();
    }

    /**
     * Get all exercises file of this resource
     */
    public function getExerciseFiles(StudentExercise $studentExercise)
    {
        return ExerciseFileResource::collection($studentExercise->exerciseFile);
    }

    /**
     * Get the assignment that this resource belong to
     */
    public function getAssignment(StudentExercise $studentExercise)
    {
        return new AssignmentResource($studentExercise->assignment);
    }
}
