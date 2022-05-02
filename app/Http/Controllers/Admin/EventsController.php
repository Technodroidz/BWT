<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\EventRegistration;
use App\Http\Controllers\Controller;
use App\Pages;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventsController extends Controller
{


    public function index(Request $request)
    {
        
        // $events  =  Event::when($request->name,function($q) use($request){
        //     $q->where('name','like','%'.$request->name.'%');
        // })
        // ->when($request->venue,function($q) use($request){
        //     $q->where('venue','like','%'.$request->venue.'%');

        // })->admin()
        // ->latest()->paginate(10)->appends($request->all());

        $events  = Event::where('user_type',2)->orderBy('id','desc')->latest()->paginate(10);
        
        return view('admin.events.list',compact('events'));
    }

    public function userRequest(Request $request)
    {       

        $events  = Event::where('user_type',1)->orderBy('id','desc')->latest()->paginate(10);
        
        return view('admin.events.userEvent_list',compact('events'));
    }


    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request){
        //return $request->all();

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'event_description' => 'required',
            'type'=>'required',
            'venue'=>'required',
            // 'user_type'=>'required',
            'event_from' => 'required',
            'event_to' => 'required'
        ]);

        if($validator->fails()){

            $response['error'] =$validator->errors()->toArray();

            foreach($response['error'] as $error){

                $request->flash();
                return redirect(route('admin.events.create'))->with('errormsg', implode('',$error));

            }
        }


        $check_events = Event::where('name', $request->name)->first();

        if($check_events){

            return back()->with('errormsg','Event is already created!');

        }

        $destinationPath = public_path() . '/uploads/events/'; // upload path
        $files = $request->file('media');

        $eventsImg = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $eventsImg);

        // $insert['image'] = "$profileImage";


        $new_event = New Event();
        $new_event->name= $request->name;
        $new_event->type= $request->type;
        $new_event->user_type= 2;
        $new_event->venue= $request->venue;
        $new_event->event_description= $request->event_description;
        $new_event->status = '1';
        $new_event->from = $request->event_from;
        $new_event->to = $request->event_to;
        $new_event->slug = $request->slug;
        $new_event->image = @$eventsImg;
        $new_event->save();


        return redirect(route('admin.events'))->with('success','Event has been created successfully!') ;


    }

    public function edit(Request $request)
    {
        $event = Event::find($request->id);

        return view('admin.events.edit',compact('event'));
    }


    public function update(Request $request){

        $destinationPath = public_path() . '/uploads/events/'; // upload path
        $files = $request->file('media');

        $eventsImg = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $eventsImg);


        $new_event = Event::find($request->id);
        $new_event->name= $request->name;
        $new_event->event_description= $request->event_description;
        $new_event->status = '1';
        $new_event->from = $request->event_from;
        $new_event->to = $request->event_to;
        $new_event->slug = $request->slug;
        $new_event->image = @$eventsImg;

        $save = $new_event->save();
        if ($save) {
            return redirect(route('admin.events'))->with('success','Event updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    public function requestApprove(Event $event)
    {
        $event->request_status=2;
        $event->save();

        return back()->with('success','Event Request Approved !');
    }

    public function requestReject(Event $event)
    {
        $event->request_status=3;
        $event->save();

        return back()->with('success','Event Request Rejected !');
    }


    public function changeStatus(Request $request){


        $find = Event::find($request['id']);

        if (!empty($find)) {
             $find->status = $request['status'];
             $find->save();
             return json_encode(['success'=>true]);
         }else{
            return json_encode(['success'=>false]);
         }
    }


    public function delete(Request $request)
    {
        if(!$request->id){
            return redirect(route('admin.evnts'))->with('errormsg','OPPS! There was an error, data not found!');
        }

        $event = Event::find($request->id);

        if ($event->delete()) {
            return redirect(route('admin.events'))->with('success','Event deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    public function participated(Request $request){


        $data = EventRegistration::join('web_users','event_registrations.user_id','=','web_users.id')
                                  ->select('web_users.*')
                                  ->where('event_registrations.event_id',$request->id)
                                  ->paginate(10);

                                  return view('admin.events.participate',compact('data'));

    }

}
