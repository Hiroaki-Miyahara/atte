<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\Breaktime;

class BreakTimeController extends Controller
{
    public function break_start_time(Request $request)
    {
        $user = Auth::user();
        Breaktime::create([
            'member_id' => $user->id,
            'name' => $user->name,
            'work_on' => Carbon::now(),
            'break_start_time' => Carbon::now(),
        ]);
        return redirect('/');
    }

    public function break_end_time(Request $request)
    {
        $user = Auth::user();
        Breaktime::create([
            'member_id' => $user->id,
            'name' => $user->name,
            'work_on' => Carbon::now(),
            'break_end_time' => Carbon::now(),
        ]);
        return redirect('/');
    }
}
