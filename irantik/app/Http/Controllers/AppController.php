<?php

namespace App\Http\Controllers;

use App\Models\Chair;
use App\Models\Event;
use App\Models\Sans;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        return view('app.index', [
            'events' => Event::all()
        ]);
    }

    public function showEvent(Event $event){
        return view('app.show-event', [
            'event' => $event
        ]);
    }

    public function buyTicket(Sans $sans){
        $rs = Ticket::where('sans_id', $sans->id)->get();
        $reserveds = [];
        foreach($rs as $r){
            array_push($reserveds, $r->chair_id);
        }
        return view('app.buy', [
            'sans' => $sans,
            'reserveds' => $reserveds,
            'aChairs' => Chair::where('place', 'A')->get(),
            'bChairs' => Chair::where('place', 'B')->get(),
            'cChairs' => Chair::where('place', 'C')->get(),
        ]);
    }

    public function submitBuyTicket(Sans $sans, Chair $chair, $name){
        $t = Ticket::create([
            'sans_id' => $sans->id,
            'chair_id' => $chair->id,
            'name' => $name,
        ]);

        return view('app.result', [
            'ticket' => $t
        ]);
    }

    /* SP */
    public function aboutUs(){
        return view('sp.aboutUs');
    }

    public function contact(){
        return view('sp.contact');
    }

    public function newsSingle(){
        return view('sp.newsSingle');
    }

    public function schedule(){
        return view('sp.schedule');
    }

    public function sponsors(){
        return view('sp.sponsors');
    }

    public function bio(){
        return view('sp.bio');
    }
}
