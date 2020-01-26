<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class AccessController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user()
    {
        return view('main');
    }

    public function admin()
    {
        return view('admin');
    }

    public function administrator()
    {

        $users = User::all();
        return view('administrator', compact('users'));
    }

    public function assighrole(User $user)
    {

        $user->roles()->detach();

        if (request('User')) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }

        if (request('Admin')) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }

        if (request('Administrator')) {
            $user->roles()->attach(Role::where('name', 'Administrator')->first());
        }

        return back();
    }
}
