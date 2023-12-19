<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LectureResource;
use App\Http\Resources\LecturerResource;
use App\Models\Lecture;
use Illuminate\Http\Request;

class ApiLectureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return LectureResource::collection(Lecture::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return new LectureResource(Lecture::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecture $lecture)
    {
        return new LectureResource($lecture);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecture $lecture)
    {
        $lecture->update($request->all());
        return new LectureResource($lecture);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecture $lecture)
    {
        $lecture->delete();
    }
}
