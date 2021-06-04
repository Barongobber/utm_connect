<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $events3 = array();
        for($i = 0; $i < count($events); $i++){
            $events3[$i] = $events[$i];
            if($i == 5){ break; }
        }

        $member = [
            'events3' => $events3,
        ];

        return view('client.index', compact('member'));
    }

    public function updateProfile(Request $r){
        $this->validate($r, [
            'email' => 'required|email',
            'address' => 'required'
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
