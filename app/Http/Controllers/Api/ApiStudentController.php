<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AssignmentResource;
use App\Http\Resources\StudentExerciseResource;
use App\Http\Resources\StudentResource;
use App\Http\Resources\SubjectResource;
use App\Models\Assignment;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ApiStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StudentResource::collection(Student::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new StudentResource(Student::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return new StudentResource($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
    }

    /**
     * Get all subjects that this student learn
     */
    public function getSubjects(Student $student)
    {
        return SubjectResource::collection($student->subjects);
    }

    /**
     * Get all exercises that this student has submitted
     */
    public function getExercises(Student $student)
    {
        return StudentExerciseResource::collection($student->exercises);
    }

    /**
     * Get all assignments that this student has been given
     */
    public function getAssignments(Student $student)
    {
        $subjects = $student->subjects;

        $assignmentList = new Collection();

        foreach ($subjects as $subject) 
        {
            $assignments = $subject->assignments;
            foreach($assignments as $assignment)
            {
                $assignmentList->add($assignment);
            }
        }
        
        return AssignmentResource::collection($assignmentList);
    }
}
