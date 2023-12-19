<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AssignmentResource;
use App\Http\Resources\LectureResource;
use App\Http\Resources\LecturerResource;
use App\Http\Resources\SubjectResource;
use App\Models\Lecture;
use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ApiLecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return LecturerResource::collection(Lecturer::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new LecturerResource(Lecturer::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        return new LecturerResource($lecturer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
        $lecturer->update($request->all());
        return new LecturerResource($lecturer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();
    }

    /**
     * Get all subjects this lecturer has taught
     */
    public function getSubjects(Lecturer $lecturer) 
    {
        return SubjectResource::collection($lecturer->subjects);
    }

    /**
     * Get all assignments this lecturer has given
     */
    public function getAssignments(Lecturer $lecturer)
    {
        return AssignmentResource::collection($lecturer->assignments);
    }

    /**
     * Get all lectures this lecturer has given
     */
    public function getLectures(Lecturer $lecturer)
    {
        return LectureResource::collection($lecturer->lectures);
    }
}
