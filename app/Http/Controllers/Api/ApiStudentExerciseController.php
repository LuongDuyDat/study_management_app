<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentExerciseResource;
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
        return new StudentExerciseResource($studentExercise->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentExercise $studentExercise)
    {
        $studentExercise->delete();
    }
}
