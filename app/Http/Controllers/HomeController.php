<?php

namespace App\Http\Controllers;

use App\Models\Estimation;
use App\Models\Schedule;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function dashboard() : View
    {
        $schedules = Schedule::all();
        $schedules = $schedules->where('group_id', Auth::user()->group_id);

        $days = [
            'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
            'Четверг', 'Пятница', 'Суббота'
        ];

        return view('forAuthUsers.dashboard', [
            'schedules' => $schedules,
            'days' => $days
        ]);
    }

    public function test()
    {
        // return Subject::find(1)->user;
        // return Estimation::find(1)->user->name . ' по ' . Estimation::find(1)->subject->title . ' получил ' . Estimation::find(1)->estimation;
    }

    public function profile()
    {
        return view('forAuthUsers.profile');
    }

}
