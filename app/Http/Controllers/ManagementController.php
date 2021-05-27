<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }
    public function profilePage(Request $r){
        $umatric = $r->session()->get('user_matric');
        $user = Member::where('matrix_card', $umatric)->get();
        $user_desc = $user[0];

        return view('profile', compact('user_desc'));
    }
}
