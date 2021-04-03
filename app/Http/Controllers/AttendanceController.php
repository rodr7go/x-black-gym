<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\User;
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

        $user = User::where('id', $user)->first();

        return back()->with(compact('attendance', 'user'));
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
