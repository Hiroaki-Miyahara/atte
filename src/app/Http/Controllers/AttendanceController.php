<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function attendance()
    {
        $id = Auth::id();
        $worktime = DB::table('worktimes')->find($id);
        return view('auth.attendance', ['worktime' => $worktime]);
    }
}
