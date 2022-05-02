<?php

namespace App\Http\Controllers\web;

use App\Channel;
use App\Event;
use App\EventRegistration;
use App\Http\Controllers\Controller;
use App\Member;
use App\Product;
use App\usercategory;

use App\WebUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use WeakMap;
use DB;

class HomeController extends Controller
{

    public function index(){
        $user = Auth::guard('web_user')->user();
        $c_name = Channel::where('user_id',Auth::id())->value('name') ?? '';
        $user->ChannelName = $c_name;
        return view('web.pages.profile',compact('user'));
    }

    public function personalInfo(){
        $user = Auth::guard('web_user')->user();
        $categories = usercategory::where('parent_id',0)->get();
        return view('web.pages.personalInfo',compact('user','categories'));
    }

    public function bwtstudioSignup(){
        $user = Auth::guard('web_user')->user();
        $categories = usercategory::where('parent_id',0)->get();
        return view('web.pages.bwtstudio_signup',compact('user','categories'));
    }

    public function add_my_request(Request $request){


        $event_request=$request->checkValue;
        $evnt_id=$request->evnt_id;
        $data=array(
            'request_for'=>$event_request,
            'request_status'=>1
            );
        $sqls=DB::table('events')
        ->where('id', $evnt_id)// find your user by their email
        ->update($data);
        if($sqls){

             return array('status'=>1);
        }else{

            return array('status'=>0);
        }
    }
    public function add_my_event(Request $request){

        $user = Auth::guard('web_user')->user();
        $eventname=$request->eventName;
        $fromDate=$request->fromDate;
        $toDate=$request->toDate;
        $venue=$request->venue;
        $user_id=$user->id;
      $type=$request->type;
        $values = array(
            'name' => $eventname,
            'from' => $fromDate,
            'to' => $toDate,
            'user_id'=>$user_id,
            'type' => $type,
            'venue'=>$venue
            );
//echo $sql="INSERT INTO `events`(`name`,  `from`, `to`,  `type`,  `venue`) VALUES ('$eventname','$fromDate','$toDate','$type','$venue')";die;
        $insert=DB::table('events')->insertGetId($values);

$values['id']=$insert;
        if($insert){


           return array('status'=>1,'data'=>$values);
        }else{
           return array('status'=>0);
        }



    }
    public function add_upcoming_event(Request $request){

        $request->validate([
            'name' =>'required|string',
            'from' =>'required|string',
            'to' =>'required|string',
            'type' =>'required|string',
            'venue'=>'required|string',
            'image'=>'required|image',
        ]);

        if($request->hasFile('image'))
         {
            $file = $request->file('image');
            $imagename=time().$file->getClientOriginalName();
            $file->move(public_path('uploads/'), $imagename);
         }
        $values = array(
            'name' => $request->name,
            'from' => $request->from,
            'to' => $request->to,
            'venue' => $request->venue,
            'type'=>$request->type,
            'event_description'=>$request->event_description,
            'image'=>$imagename
        );

        $event = auth()->guard('web_user')->user()->events()->create($values);

        return response()->json(['status'=>1,'data'=>$event,'message'=>'Event created successfully!']);
    }
    public function upcoming_event(){

         $user = Auth::guard('web_user')->user();

         $date=date("Y/m/d");

    $cur_date=date_format(date_create($date),"Y-m-d");

         $events=DB::table('events')->select('*')->where('type','up_coming')->where('from','>',$cur_date)->orderBy('from', 'ASC')->get();

       return view('web.pages.upcoming-event',compact('events'));

    }


    public function special_event(){

        $user = Auth::guard('web_user')->user();

         $events=DB::table('events')->select('*')->where('type','special')->get();

       return view('web.pages.special-event',compact('events'));
    }

    public function add_special_event(Request $request){

        $request->validate([
            'name' =>'required|string',
            'from' =>'required|string',
            'to' =>'required|string',
            'type' =>'required|string',
            'venue'=>'required|string',
            'image'=>'required|image',
        ]);

        if($request->hasFile('image'))
         {
            $file = $request->file('image');
            $imagename=time().$file->getClientOriginalName();
            $file->move(public_path('uploads/'), $imagename);
         }
        $values = array(
            'name' => $request->name,
            'from' => $request->from,
            'to' => $request->to,
            'venue' => $request->venue,
            'type'=>$request->type,
            'event_description'=>$request->event_description,
            'image'=>$imagename
        );

        $event = auth()->guard('web_user')->user()->events()->create($values);

    }
        public function past_event(){


        $user = Auth::guard('web_user')->user();

          $date=date("Y/m/d");

    $cur_date=date_format(date_create($date),"Y-m-d");


         $events=DB::table('events')->select('*')->where('type','up_coming')->where('to','<',$cur_date)->orderBy('to', 'ASC')->get();

       return view('web.pages.past-event',compact('events'));



    }

    public function private_event(){

          $user = Auth::guard('web_user')->user();

         $events=DB::table('events')->select('*')->where('type','private')->get();

       return view('web.pages.private-event',compact('events'));



    }


    public function my_events(){

        @$events=Auth::guard('web_user')->user()->events;
       return view('web.pages.my-event',compact('events'));
    }

    public function my_event_show($slug)
    {
        $isRegistered = 0;
        $event = Event::with('registratons.user')->where('slug',$slug)->firstOrFail();
        if($event){
        $isRegistered = EventRegistration::where('user_id',Auth::guard('web_user')->user()->id)->where('event_id',$event->id)->count();
        $event->isRegistered = $isRegistered;
        }
        // return $event;

        return view('web.pages.my-events-show',compact('event'));

    }


    public function events(){

         $events = Event::where('user_type',2)->get();

       return view('web.pages.event',compact('events'));

    }

    public function register_event(Request $request)
    {
        $request->validate(['event_id'=>'required|numeric']);
        $event = Event::findOrFail($request->event_id);
        $event->registratons()->updateOrCreate(['user_id'=>auth()->guard('web_user')->Id()]);

        return response()->json(['message'=>'success']);
    }
    public function our_community_delete($id)
    {
        $delete=DB::table('our_community')->where('id', $id)->delete();
        if($delete==true)
         {
            return back()->with('success', 'Member added.');
         }
         else
         {
           return back()->with('error', 'Member not add.');
         }

    }

    public function our_community()
    {
        return view('web.pages.our_community');
    }

    public function add_member(Request $request)
    {
        $request->validate([
            "name"=>'required|string|max:200',
            "staff_id"=>'nullable',
            "position"=>'nullable',
            "bio"=>'nullable|string',
            "image"=>'nullable|image',
        ]);
        if($request->hasFile('image'))
         {
            $file = $request->file('image');
            $imagename=time().$file->getClientOriginalName();
            $test=$file->move(public_path('uploads/'), $imagename);
         }

         $array=array(
             "name"=>$request->name,
             "staff_id"=>$request->staff,
             "position"=>$request->position??'',
             "bio"=>$request->bio,
             "image"=>$imagename,
             'status'=>1
         );

         auth()->user()->communities()->create($array);

        return back()->with('success', 'Member added.');

    }

    public function edit_member(Request $request)
    {
        $request->validate([
            "name"=>'required|string|max:200',
            "staff_id"=>'nullable',
            "position"=>'nullable',
            "bio"=>'nullable|string',
            "image"=>'nullable|image',
        ]);
        if($request->hasFile('image'))
         {
            $file = $request->file('image');
            $imagename=time().$file->getClientOriginalName();
            $test=$file->move(public_path('uploads/'), $imagename);
         }

         $array=array(
             "name"=>$request->name,
             "staff_id"=>$request->staff,
             "position"=>$request->position??'',
             "bio"=>$request->bio,
             "image"=>$imagename
         );

        auth()->user()->communities()->where('id', $request->id)->update($array);

        return back()->with('success', 'Member Update.');
    }


    public function add_image_gallery(Request $request)
    {
        $request->validate([
            'image'=>'required|image'
        ]);
       if($request->hasFile('image'))
         {
            $file = $request->file('image');
            $test=$file->move(public_path('uploads/gallery'), $file->getClientOriginalName());
            $imagename=$file->getClientOriginalName();
            auth()->user()->galleries()->create(["image"=>$imagename]);
         }

         return back()->with('success', 'Image added.');
    }

    public function add_new_channel(Request $request)
    {
      $array=array(
             "user_id"=>Auth::guard('web_user')->user()->id,
             "name"=>$request->channel,
             "status"=>'1'
         );

         $insert=DB::table('channel')->insert($array);
         if($insert==true)
         {
            return back()->with('success', 'Channel Created.');
         }
         else
         {
           return back()->with('error', 'Channel not add.');
         }
    }

    public function profileUpdate(Request $request){


        $User_data = WebUser::find(Auth::guard('web_user')->user()->id);

        if(!empty($request->ChannelName)){
            Channel::where('user_id',Auth::id())->update([
                'name'=>$request->ChannelName,
                'slug'=>str_replace(" ", "-", $request->ChannelName)
            ]);
        }

       if ($request->hasFile('profile_image')) {

        $validator = \Validator::make($request->all(),[
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

       if($validator->fails()){

        $response['error'] =$validator->errors()->toArray();

        foreach($response['error'] as $error){

            $request->flash();

            return back()->with('danger', implode('',$error));

            }

        }



            $destinationPath = public_path() . '/storage/profile/'; // upload path
            $files = $request->file('profile_image');

            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);

            $insert['image'] = "$profileImage";

            // Save In Database


           $User_data->profile_image="$profileImage";
			$User_data->save();

            return back()->with('success', 'Image Upload successfully');
        }


        $validator = \Validator::make($request->all(),[
            'first_name'=>'required',
            'email' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'gender'=> 'required',
            'dob'=> 'required',
            'address'=> 'required',
            'occupation'=> 'required',
        ]);

       if($validator->fails()){

        $response['error'] =$validator->errors()->toArray();

        foreach($response['error'] as $error){

            $request->flash();

            return back()->with('danger', implode('',$error));

            }

        }


        $User_data->name = $request->first_name .' '. $request->last_name;
        $User_data->mobile = $request->phone;
        $User_data->email = $request->email;

        $User_data->gender = $request->gender;
        $User_data->dob = $request->dob;
        $User_data->address = $request->address;
        $User_data->occupation = $request->occupation;
        $User_data->save();


        $request->flash();
        return back()->with('success','Profile has been updated successfully !');

    }


    public function passwordchange(Request $request)
    {
        $User_data = WebUser::find(Auth::guard('web_user')->user()->id);
      $validator = \Validator::make($request->all(),[
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);

        if($validator->fails()){

        $response['error'] =$validator->errors()->toArray();

        foreach($response['error'] as $error){

            $request->flash();

            return back()->with('danger', implode('',$error));

            }
       }

       if($request->new_password  !== $request->confirm_password){
            $request->flash();
            return back()->with('danger','Password does not matched, please try again !');
        }

        $User_data->password = Hash::make($request->new_password);
        $User_data->save();


        $request->flash();
        return back()->with('success','Password updated successfully !');
    }

    public function channel2(){

        $channel=DB::table('channel')->get();

        return view('web.pages.my-channel2',compact('channel'));
    }

    public function channel_subscribe(Request $request){


        $user_id=$request->user_id;
        $follower_id=$request->follower_id;


        $data=array("user_id"=>$user_id,"follower_id"=>$follower_id);
        $subscribeChannel=DB::table('followers')->insert($data);
        if($subscribeChannel){

            return array('status'=>1,'msg'=>"Subscribe Successfully !!");
        }else{

            return array('status'=>0,'msg'=>"Subscribe Not Successfully Please Try Againg !!");
        }
    }

    public function channels(Request $request){


        $channel=Channel::with('user')->when($request->search,function($q) use($request){
            $q->where('name','like','%'.$request->search.'%');
        })->orderBy('id','desc')->get();
       // print_r($channel);die;
        return view('web.pages.my-channel',compact('channel'));

    }

    public function channelDetail($slug){

        $channel=Channel::where('slug',$slug)->firstOrFail();
        return view('web.pages.mi-channel',compact('channel','slug'));

    }

    public function channelPerformance($slug)
    {
        $channel=Channel::where('slug',$slug)->firstOrFail();
        $performances = $channel->user->performances;
        return view('web.pages.channel-performance',compact('performances'));
    }

    public function preview_channel(Request $request){


 $channel_name=$request->channel_name;
 $request->session()->put('channel_name',$channel_name);


        //return view('web.pages.preview-channel',compact('channel_name'));
        return array("status"=>1);
    }

    public function uploadVideo(Request $request)
    {
        $performance = $request->validate([
            'name' => 'required',
            'video'=> 'required|mimes:mp4,m4v,mov,avi,wmv,flv,mpg,mpeg',
            'thumbnail' => 'nullable|image',
            'type' => 'required',
        ]);
        if($request->file('video')){
            $file = $request->file('video');
            $name = time().$file->getClientOriginalExtension();
            $path = public_path('uploads/video');
            $file->move($path, $name);
            $performance['video'] = $name;
        }

        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            $name = time().$file->getClientOriginalExtension();
            $path = public_path('uploads/thumbnail');
            $file->move($path, $name);
            $performance['thumbnail'] = $name;
        }

        auth()->user()->performances()->create($performance);

        return response()->json(['message'=>'Video uploaded successfully!']);
    }

    public function nationalJudge()
    {
        $members = Member::where('type',"National’s Judges")->get();
        return view('web.pages.national_judges', compact('members'));
    }

    public function stateJudge()
    {
        $members = Member::where('type',"State's Judges")->get();
        return view('web.pages.state_judges', compact('members'));
    }

    public function focusGroup()
    {
        $members = Member::where('type',"Focus Groups")->get();
        return view('web.pages.state_groups', compact('members'));
    }

    public function addAddress(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|max:200',
            'mobile'=>'required|digits_between:10,15',
            'pincode'=>'required|max:200',
            'locality'=>'required|max:200',
            'address'=>'required|max:300',
            'city'=>'required|max:200',
            'state'=>'required|max:200',
            'landmark'=>'required|max:200',
            'phone'=>'required|digits_between:10,15',
        ]);
        auth()->guard('web_user')->user()->addresses()->create($data);

        return back()->withSuccess('Address Added Successfully!');
    }

    public function finalSubmission(Request $request)
    {
        $user = Auth::guard('web_user')->user();
        $categories = usercategory::where('parent_id',0)->get();
        return view('web.pages.finalSubmit',compact('user','categories'));


    }

}
