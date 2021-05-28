<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('client.index', compact('user'));
    }
    public function updateProfile(Request $r){
        $this->validate($r, [
            'email' => 'email'
        ]);

        $route = $r->get('route');
        $user = Member::where('matrix_card', Auth::user()->matrix_card)
        ->update([
            'email' => $r->get('email'),
            'address' =>$r->get('address'),
        ]);

        return redirect($route);
    }
}
