<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ExerciseFileResource;
use App\Models\ExerciseFile;
use Illuminate\Http\Request;

class ApiExerciseFileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ExerciseFileResource(ExerciseFile::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new ExerciseFileResource(ExerciseFile::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(ExerciseFile $exerciseFile)
    {
        return new ExerciseFileResource($exerciseFile);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExerciseFile $exerciseFile)
    {
        return new ExerciseFileResource($exerciseFile->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExerciseFile $exerciseFile)
    {
        $exerciseFile->delete();
    }
}
