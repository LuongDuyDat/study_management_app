<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LecturerResource;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class ApiLecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new LecturerResource(Lecturer::all());
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
        return new LecturerResource($lecturer->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();
    }
}
