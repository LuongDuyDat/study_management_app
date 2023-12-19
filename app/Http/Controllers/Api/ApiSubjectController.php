<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AssignmentResource;
use App\Http\Resources\LectureResource;
use App\Http\Resources\LecturerResource;
use App\Http\Resources\StudentResource;
use App\Http\Resources\SubjectResource;
use App\Models\Subject;
use Illuminate\Http\Request;

class ApiSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SubjectResource::collection(Subject::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new SubjectResource(Subject::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        return new SubjectResource($subject);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->update($request->all());
        return new SubjectResource($subject);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        return $subject->delete();
    }

    /**
     * Get all students study this subject
     */
    public function getStudents(Subject $subject)
    {
        return StudentResource::collection($subject->students());
    }

    /**
     * Get the lecturer that this subject belong to
     */
    public function getLecturer(Subject $subject)
    {
        return new LecturerResource($subject->lecturer);
    }

    /**
     * Get all lectures that this subject has
     */
    public function getLectures(Subject $subject)
    {
        return LectureResource::collection($subject->lectures);
    }

    /**
     * Get all assignments that this subject has
     */
    public function getAssignments(Subject $subject)
    {
        return AssignmentResource::collection($subject->assignments);
    }
}
