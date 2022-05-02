<?php

namespace App\Http\Controllers;

use App\internship;
use App\Member;
use Illuminate\Http\Request;

use Redirect,Hash,Auth,Mail;
use App\WebUser;






class InternshipController extends Controller
{


    public function signup(){

        $data = [];
        return view('web.pages.internship',compact('data'));
    }

    public function registration(Request $request){

        if($request->finalSubmit == 1){

            $userId = $request->uid;
            $data = $request->all();

            unset($data['_token']);
            unset($data['finalSubmit']);
            unset($data['uid']);

            $data['experience'] = implode(', ', $data['experience']);

            
            $userEmail = WebUser::where('id',$userId)->value('email');

            if($request->file('image')){
                $file = $request->file('image');
                $input = time().'.'.$file->getClientOriginalExtension();
                $path = public_path().'/uploads';
                $file->move($path, $input);
                $data['image'] =$input;
            }


            internship::where('user_id',$userId)->update($data);

            $subject = "Your internship request has been received : Bwt";
            $this->sendMail("intern",$userEmail,$subject,1);


            return redirect('/internship/join?u=3');

        }

        $check_user = WebUser::where('email',$request->email)->first();

        if($check_user){
            return redirect('/internship/signup?u=1');
        }

        if(!empty($request->file('photo')))
        {
            $file = $request->file('photo');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $src=$input;


        }

        $new_user = New WebUser();
        $new_user->name = $request->first_name.' '.$request->mid_name.' '.$request->last_name;
        $new_user->mobile = $request->phone;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->password);
        $new_user->us_citizen = 1;
        $new_user->legal_permanent = 1;
        $new_user->proof_of_residence = 1;
        $new_user->authorization_card = 1;
        $new_user->photo_and_video = 1;
        $new_user->save();


        if(!empty($request->ChannelName)){
            $new_user->channel()->create(['name'=>$request->ChannelName,'status'=>1]);
    
          }else{
            $new_user->channel()->create(['name'=>'Beta Studio','status'=>1]);
    
          }

        $data = [
                  "first_name"=>$request->first_name,
                  "mid_name"=>$request->mid_name,
                  "last_name"=>$request->last_name,
                  "education"=>$request->education,
                  "education_discipline"=>$request->education_discipline,
                  "state"=>$request->state,
                  "city"=>$request->city,
                  "zip"=>$request->zip,
                  "country"=>$request->country,
                  "address"=>$request->address,
                  "phone"=>$request->phone,
                  "user_id"=>$new_user->id,
                  "src"=>$src??''


                    ];

        $data = internship::create($data);

        $userEmail = WebUser::where('id',$new_user->id)->value('email');

        $subject = "Your Signup data submitted : Bwt";
        $this->sendMail("verification",$userEmail,$subject,0);

        // return $data;
        return redirect('/internship/signup?u=2');



    }

    public function join_internship(Request $request){

        $data =  $data = internship::join('web_users','internships.user_id','=','web_users.id')
        ->select('internships.*','web_users.name as userName','web_users.email')
       ->where('web_users.id',$request->uid)->first();

    //    $words = explode(" ", $data->userName.' g');

    //    if(count($words) >= 3){
    //    $data->firstname = $words[0];
    //    $data->midname = $words[1];
    //    $data->lastname = $words[2];
      
// return $data;

        return view('web.pages.join-internship',compact('data'));
    }


    public function index(Request $request){
        // $internships= internship::when($request->name,function($q) use($request){
        //     $q->where('name','like','%'.$request->name.'%');
        // })
        // ->when($request->position,function($q) use($request){
        //     $q->where('position','like','%'.$request->position.'%');
        // })
        // ->latest()->paginate(10)->appends($request->all());

        $internships = internship::join('web_users','internships.user_id','=','web_users.id')
        ->select('internships.*','web_users.name as userName')
        ->orderBy('internships.id','desc')
        ->get();

        return view('admin.internship.index',compact('internships'));
    }

    public function review($uid){
        // $sponsors = sponsor::paginate(50);
 
        $data = internship::join('web_users','internships.user_id','=','web_users.id')
                               ->select('internships.*','web_users.name as userName','web_users.email')
                              ->where('web_users.id',$uid)->first();

        
         return view('admin.internship.review',compact('data'));
     }

     public function approval(Request $request){
 
        $status = 1;

        $userEmail = WebUser::where('id',$request->uid)->value('email');

        if($request->st == 2){
            $status = 2;

            
            $subject = "Your internship request has been approved : Bwt";
            $this->sendMail("intern",$userEmail,$subject,2);
        }
        if($request->st == 3){
            $status = 3;

            $subject = "Your internship application has been rejected : Bwt";
            $this->sendMail("rejected",$userEmail,$subject,2);
        }

        $data = internship::where('user_id',$request->uid)->update(['status'=>$status]);

        
        return redirect('admin/internship?st='.$status);

     }



    public function new(){

        $internships= internship::orderBy('id','desc')->take(3)->get();

        $teamMgt = Member::where('type','Team Management')->orderBy('id','desc')->take(3)->get();
        $producers = Member::where('type','Producers')->orderBy('id','desc')->take(3)->get();
        $hproducers = Member::where('type','Host Producers')->orderBy('id','desc')->take(3)->get();
        $crew = Member::where('type','Crew Production')->orderBy('id','desc')->take(3)->get();
        
        return view('web.pages.community-circle',compact('internships','teamMgt','producers','hproducers','crew'));
    }



    public function create(){
        $internships = internship::all();
         return view('internship.create',compact('internships'));

    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'position'=>'required',
            'image'=>'required',
            'decription'=>'required',
        ]);
         
        $internships = new internship;
        $internships->user_id=auth()->Id();
        $internships->name=$request->name;
        $internships->position=$request->position;
        $internships->decription=$request->decription;
        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $internships->image =$input;
        }
                $internships->save();

        return redirect(route('internship.create'))->with('success','information is saved');
    }


    public function edit($id){
        $internships= internship::find($id);
        return view('internship.edit',compact('internships'));

    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'age'=>'required',
            'skills'=>'required',
            'contact_no'=>'required',
        ]);
         
        $internships = internship::find($id);
        $internships->name=$request->name;
        $internships->age=$request->age;
        $internships->skills=$request->skills;
        $internships->contact_no=$request->contact_no;
        $internships->save();

        return redirect(route('internship.index'))->with('success','information is updated  ');
    }


    
    public function destroy($uid)
    {
        WebUser::where('id',base64_decode($uid))->delete();
        internship::where('user_id',base64_decode($uid))->delete();
    
        return redirect('admin/internship?u=4');
    
    }


    public function sendMail($template,$email,$subject,$reviewing)
    {
 

     $userId = WebUser::where('email',$email)->value('id');

      $data = [
        'emailTemplate'=>$template,
        'email'=>$email,
        'subject'=>$subject ?? '',
        'uid'=>$userId ?? '',
        'reviewing'=>$reviewing ?? 0
    ];



    Mail::send('emails.'.$data['emailTemplate'], ["data"=>$data], function($message) use ($data){
        $message->from('support@bwtstudio.com','BWT'); 
        $message->to($data['email'])->subject($data['subject']);
   });

    // echo "HTML Email Sent. Check your inbox.";


}


}
