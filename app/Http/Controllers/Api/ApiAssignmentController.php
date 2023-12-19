<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AssignmentResource;
use App\Http\Resources\StudentExerciseResource;
use App\Models\Assignment;
use Illuminate\Http\Request;

class ApiAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AssignmentResource::collection(Assignment::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new AssignmentResource(Assignment::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Assignment $assignment)
    {
        return new AssignmentResource($assignment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        $assignment->update($request->all());
        return new AssignmentResource($assignment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
    }

    /**
     * Get all Exerciise of the resource
     */
    public function getExercises(Assignment $assignment)
    {
        return StudentExerciseResource::collection($assignment->studentExercises);
    }
}
