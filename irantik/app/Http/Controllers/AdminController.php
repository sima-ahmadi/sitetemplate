<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Sans;
use App\Models\Ticket;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return redirect('/admin/events');
        // return view('admin.index');
    }

    public function events(){
        return view('admin.events', [
            'events' => Event::all()
        ]);
    }

    public function createEvent(){
        return view('admin.create-event');
    }

    public function saveEvent(Request $request){
        $request->validate([
            'name' => 'required',
            'salon' => 'required',
            'sanses' => 'required',
            'a_price' => 'required',
            'b_price' => 'required',
            'c_price' => 'required',
            'image' => 'required',
        ]);

        $event = Event::create([
            'name' => $request->input('name'),
            'salon' => $request->input('salon'),
            'a_price' => $request->input('a_price'),
            'b_price' => $request->input('b_price'),
            'c_price' => $request->input('c_price'),
        ]);

        $image = $request->file('image');
        $imageExt = $image->getClientOriginalExtension();
        $image->move(public_path('/s3/'), $event->id.'.'.$imageExt);

        $event->image = '/s3/'.$event->id.'.'.$imageExt;
        $event->save();

        $sanses = json_decode($request->input('sanses'));
        foreach($sanses as $sans){
            Sans::create([
                'event_id' => $event->id,
                'date' => $sans
            ]);
        }

        session()->flash('ok', 'کنسرت ذخیره شد');
        return redirect('/admin/events');
    }

    public function tickets(){
        return view('admin.tickets', [
            'tickets' => Ticket::with(['sans.event'])->orderBy('id', 'DESC')->get()
        ]);
    }

    public function cancelTicket(Ticket $ticket){
        $ticket->delete();
        session()->flash('ok', 'بلیط با موفقیت باطل شد');
        return redirect()->back();
    }
}
