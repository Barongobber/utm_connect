<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index(Request $r)
    {
        $role = $r->session()->get('user_access');

        if($role == "admin"){
            return redirect('admin');
        } else if($role == "management"){
            return redirect('management');
        } else if($role == "member"){
            return redirect('member');
        }

        return view('home');
    }

}
