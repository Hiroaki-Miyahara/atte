<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Worktime;

class WorkTimeController extends Controller
{
    public function work_start_time(Request $request)
    {
        // $WorkStartIn = 0;
        $user = Auth::user();
        Worktime::create([
            'member_id' => $user->id,
            'name' => $user->name,
            'work_on' => Carbon::now(),
            'work_start_time' => Carbon::now(),
        ]);
        return redirect('/');
        // ->with('WorkStartIn', $WorkStartIn);
    }

    public function work_end_time(Request $request)
    {
        $user = Auth::user();
        Worktime::create([
            'member_id' => $user->id,
            'name' => $user->name,
            'work_on' => Carbon::now(),
            'work_end_time' => Carbon::now(),
        ]);
        Administrator::create([
            'member_id' =>$user->id,
            'name' =>$user->name,
            'work_on' =>$user->work_on,
            'work_start_time' => $user->work_start_time,
            'work_end_time' => $user->work_end_time,
        ]);
        return redirect('/');
    }
}
