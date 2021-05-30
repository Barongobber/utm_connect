<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function allNews(Request $r){
        $events = Event::all();

        return view('client.events', compact('events'));
    }
}
