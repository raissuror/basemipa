<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $model)
    {   
        $users = User::all();
        if(auth()->user()->username == 'admin') {        
            return view('home', ['users' => $users]);
        }
        else {
            return view('home', ['users' => $users]);
        }
        return view('home', ['users' => $users]);
    }

    public function admin(User $model)
    {
        $users = User::all();
        return view('adminhome', ['users' => $users]);
    }
}
