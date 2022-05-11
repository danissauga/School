<?php

namespace App\Http\Controllers;

use App\Models\attendanceGroup;
use App\Http\Requests\StoreattendanceGroupRequest;
use App\Http\Requests\UpdateattendanceGroupRequest;

class AttendanceGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreattendanceGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreattendanceGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\attendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function show(attendanceGroup $attendanceGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\attendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(attendanceGroup $attendanceGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateattendanceGroupRequest  $request
     * @param  \App\Models\attendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateattendanceGroupRequest $request, attendanceGroup $attendanceGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\attendanceGroup  $attendanceGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(attendanceGroup $attendanceGroup)
    {
        //
    }
}
