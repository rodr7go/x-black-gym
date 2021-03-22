<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{

    public function index()
    {
        $attendances = Attendance::all();

        return view('attendances.index', compact('attendances'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

    }

    public function addAttendance($user)
    {
        $attendance = new Attendance();
        $attendance->user_id = $user;
        $attendance->date = Carbon::now()->toDateString();
        $attendance->hour = Carbon::now()->toTimeString();
        $attendance->save();

        return redirect()->route('users.index')->with('message', 'Done');
    }

    public function show(Attendance $attendance)
    {
        //
    }

    public function edit(Attendance $attendance)
    {
        //
    }

    public function update(Request $request, Attendance $attendance)
    {
        //
    }


    public function destroy(Attendance $attendance)
    {
        //
    }
}
