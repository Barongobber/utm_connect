<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('admin.index', compact('members'));
    }

    public function changeGrant(Request $r){
        dd($r);
    }
}
