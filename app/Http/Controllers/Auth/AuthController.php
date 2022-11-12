<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function login() : View
    {
        return view('auth.login');
    }

    public function logining(Request $req): RedirectResponse
    {
        $user = $req->only('email', 'password');

        if(Auth::attempt($user)) {
            return redirect()->route('dashboard')->with('status', 'Вы авторизованы');
        }

        return redirect()->route('login');
    }

    public function register() : View
    {
        $groups = Group::all();
        return view('auth.register', ['groups' => $groups]);
    }

    // TODO доделать защиту от дебилов(валидация данных)
    public function registering(Request $req) : RedirectResponse
    {
        User::create([
            'name' => $req->name,
            'role_id' => 4,
            'group_id' => $req->group,
            'email' => $req->email,
            'password' => Hash::make('na5CmdTP6u')
        ]);

        $user = $req->only('email', 'password');

        if(Auth::attempt($user)) {
            return redirect()->route('dashboard')->with('status', 'Вы авторизованы');
        }

        return redirect()->route('login');
    }

    public function logout() : RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
