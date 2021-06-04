<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;

class EventController extends Controller
{
    public function allEventMember(Request $r){
        $events = Event::all()->sortBy('posted_on')->reverse();

        return view('client.events', compact('events'));
    }

    public function anEventMember(Request $r){
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

    public function addEvent(Request $r){
        $today = new Carbon;

        $pic1 = $r->file('e_pic1');
        $pic2 = $r->file('e_pic2');
        $pic3 = $r->file('e_pic3');

        $pic1name = $pic1->getClientOriginalName();
        if($pic2 != null) $pic2name = $pic2->getClientOriginalName();
        else $pic2name = null;
        if($r->e_pic3 != null) $pic3name = $pic3->getClientOriginalName();
        else $pic3name = null;

        $event = new Event([
            'event_title' => $r->e_title,
            'event_category' => $r->e_category,
            'event_venue' => $r->e_venue,
            'posted_on' => $today,
            'open_for' => $r->e_open_for,
            'closed_on' => $r->e_closed_on,
            'event_details' => $r->e_details,
            'event_url' => $r->e_url,
            'event_date' => $r->e_date,
            'event_pic1' => $pic1name,
            'event_pic2' => $pic2name,
            'event_pic3' => $pic3name,
        ]);
        $event->save();

        $newPath = public_path() . '/images/event/' . $event->event_id;

        $pic1->move($newPath, $pic1name);
        if($r->e_pic2 != null) $pic2->move($newPath, $pic2name);
        if($r->e_pic3 != null) $pic3->move($newPath, $pic3name);

        return redirect('table');
    }
}
