<?php

namespace App\Http\Controllers;

use App\internship;
use App\Employee;
use Illuminate\Http\Request;

use Redirect,Hash,Auth,Mail;
use App\WebUser;






class EmployeeController extends Controller
{


    public function signup(){

        $data = [];
        return view('web.pages.employee.signup',compact('data'));
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


            Employee::where('user_id',$userId)->update($data);

            $subject = "Your Employee request has been received : Bwt";
            $this->sendMail("employee",$userEmail,$subject,1);


            return redirect('/employee/apply?u=3');

        }

        $check_user = WebUser::where('email',$request->email)->first();

        if($check_user){
            return redirect('/employee/signup?u=1');
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
                  "src"=>$src??'',


                    ];

        $data = Employee::create($data);

        $userEmail = WebUser::where('id',$new_user->id)->value('email');

        $subject = "Your Signup data submitted : Bwt";
        $this->sendMail("verification",$userEmail,$subject,0);

        // return $data;
        return redirect('/employee/signup?u=2');



    }

    public function join_employee(Request $request){

        $data =  $data = Employee::join('web_users','employees.user_id','=','web_users.id')
        ->select('employees.*','web_users.name as userName','web_users.email')
       ->where('web_users.id',$request->uid)->first();

 

    // $data = [];

    return view('web.pages.employee.apply',compact('data'));

    }


    public function index(Request $request){
        // $internships= internship::when($request->name,function($q) use($request){
        //     $q->where('name','like','%'.$request->name.'%');
        // })
        // ->when($request->position,function($q) use($request){
        //     $q->where('position','like','%'.$request->position.'%');
        // })
        // ->latest()->paginate(10)->appends($request->all());

        $employees = Employee::join('web_users','employees.user_id','=','web_users.id')
        ->select('employees.*','web_users.name as userName')
        ->orderBy('employees.id','desc')
        ->get();

        return view('admin.employee.index',compact('employees'));
    }

    public function review($uid){
        // $sponsors = sponsor::paginate(50);
 
        $data = Employee::join('web_users','employees.user_id','=','web_users.id')
                               ->select('employees.*','web_users.name as userName','web_users.email')
                              ->where('web_users.id',$uid)->first();

        
         return view('admin.employee.review',compact('data'));
     }

     public function approval(Request $request){
 
        $status = 1;
        $userEmail = WebUser::where('id',$request->uid)->value('email');


        if($request->st == 2){
            $status = 2;

            $subject = "Your Employee request has been approved : Bwt";
            $this->sendMail("employee",$userEmail,$subject,2);
        }
        if($request->st == 3){
            $status = 3;
            $subject = "Your employee application has been rejected : Bwt";
            $this->sendMail("rejected",$userEmail,$subject,2);
        }

        $data = Employee::where('user_id',$request->uid)->update(['status'=>$status]);

        
        return redirect('admin/employee?st='.$status);

     }



    public function new(){

        $internships= internship::paginate(20);
        return view('web.pages.community-circle',compact('internships'));
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
        Employee::where('user_id',base64_decode($uid))->delete();
    
        return redirect('admin/employee?u=4');
    
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
