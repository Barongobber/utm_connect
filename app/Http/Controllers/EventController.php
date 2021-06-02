<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventController extends Controller
{
    public function allEvent(Request $r){
        $events = Event::all();

        return view('client.events', compact('events'));
    }

    public function anEvent(Request $r){
        $events = Event::where('event_id', $r->id)->get();
        $event = $events[0];

        //Check if user can still participate
        $today = new Carbon;
        $open = ($event->closed_on > $today);

        //Check if user can give feedback (After the event ended)
        $done = ($event->event_date <= $today);

        $eventDesc = [
            'event' => $event,
            'open' => $open,
            'done' => $done,
        ];
        return view('client.view-event', compact('eventDesc'));
    }
}
