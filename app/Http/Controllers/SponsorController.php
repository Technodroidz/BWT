<?php

namespace App\Http\Controllers;

use App\sponsor;
use App\partner;
use App\internship;
use App\Employee;
use App\FocusGroup;
use App\Judge;

use Illuminate\Http\Request;

use Redirect,Hash,Auth,Mail;
use App\WebUser;


class SponsorController extends Controller
{

    //-----------------------------index-------------------------//


    public function signup(){

        $data = [];
        return view('web.pages.sponsorship',compact('data'));
    }

    public function registration(Request $request){

        
        if($request->finalSubmit == 1){

            $userId = $request->uid;
            $data = $request->all();

            unset($data['_token']);
            unset($data['finalSubmit']);
            unset($data['uid']);

            $data['experience'] = implode(', ', $data['experience']);

            if($request->file('image')){
                $file = $request->file('image');
                $input = time().'.'.$file->getClientOriginalExtension();
                $path = public_path().'/uploads';
                $file->move($path, $input);
                $data['image'] =$input;
            }

            sponsor::where('user_id',$userId)->update($data);
            
            $userEmail = WebUser::where('id',$userId)->value('email');

            $subject = "Your sponsorship request has been received : Bwt";
            $this->sendMail("sponsor",$userEmail,$subject,1);

            return redirect('/sponsor/join?u=3');

        }

        $check_user = WebUser::where('email',$request->email)->first();

        if($check_user){
            return redirect('/sponsor/signup?u=1');
        }

        if($request->file('photo')){
            $file = $request->file('photo');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $src =$input;
        }

        if($request->file('file')){
            $file = $request->file('file');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $video =$input;
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
                  "business_name"=>$request->business_name,
                  "state"=>$request->state,
                  "city"=>$request->city,
                  "zip"=>$request->zip,
                  "country"=>$request->country,
                  "address"=>$request->address,
                  "phone"=>$request->phone,
                  "user_id"=>$new_user->id,
                  "src"=>$src??'',
                  "video"=>$video??'',
                  "type"=>$request->type??'',

                    ];

        $data = sponsor::create($data);

        $userEmail = WebUser::where('id',$new_user->id)->value('email');

        $subject = "Your Signup data submitted : Bwt";
        $this->sendMail("verification",$userEmail,$subject,0);
        // return $data;
        return redirect('/sponsor/signup?u=2');



    }

    public function join_sponsorship(Request $request){

         $data = sponsor::join('web_users','sponsors.user_id','=','web_users.id')
                               ->select('sponsors.*','web_users.name as userName')
                              ->where('web_users.id',$request->uid)->first();

                            //   $words = explode(" ", $data->name);

                            //   $data->firstname = $words[0];
                            //   $data->lastname = $words[1];


        return view('web.pages.join-sponsorship',compact('data'));

    }



    public function index(){
       // $sponsors = sponsor::paginate(50);

        $sponsors = sponsor::join('web_users','sponsors.user_id','=','web_users.id')
        ->select('sponsors.*','web_users.name as userName')
        ->orderBy('sponsors.id','desc')
        ->get();
       
        return view('admin.sponsor.index',compact('sponsors'));
    }

    public function review($uid){
        // $sponsors = sponsor::paginate(50);
 
        $data = sponsor::join('web_users','sponsors.user_id','=','web_users.id')
                               ->select('sponsors.*','web_users.name as userName')
                              ->where('web_users.id',$uid)->first();

        
         return view('admin.sponsor.review',compact('data'));
     }

     public function approval(Request $request){
 
        $status = 1;

        $userEmail = WebUser::where('id',$request->uid)->value('email');

        if($request->st == 2){
            $status = 2;

            $subject = "Your sponsorship request has been approved : Bwt";
            $this->sendMail("sponsor",$userEmail,$subject,2);
        }
        if($request->st == 3){
            $status = 3;

            $subject = "Your sponsorship application has been rejected : Bwt";
            $this->sendMail("rejected",$userEmail,$subject,2);
        }

        $data = sponsor::where('user_id',$request->uid)->update(['status'=>$status]);

        
        return redirect('admin/sponsor/new?st='.$status);

     }

    //--------------show------------------------//

    
    public function new(){
        $sponsors = sponsor::paginate(25);
        return view('web.pages.sponsors',compact('sponsors'));
    }

    //---------------------------create------------------------//

    public function create(){
        $sponsors = sponsor::all();
        return view('admin.sponsor.create',compact('sponsors'));
    }

    //----------------------------store------------------------//

    public function store(Request $request){

        $request->validate([
            'image'=>'required',           
        ]);

        $sponsors = new sponsor;
        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $sponsors->image =$input;
        }
       
        $sponsors->save();
        
        return redirect(route('admin.sponsor.index'))->with('success','Sponsor has been added successfully!');

        

    }

    //--------------------------------edit-------------------------------------//


    public function edit($id)
    {
        $sponsors = sponsor::find($id);
        return view('admin.sponsor.edit',compact('sponsors'));
    }

    //---------------------------------update function-------------------//
       

    public function update(Request $request,$id){

        $request->validate([
            'image'=>'required',
        ]);

        $sponsors = sponsor::find($id);

        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $sponsors->image =$input;
            $sponsors->save();

            return redirect(route('admin.sponsor.index'))->with('sucess','sponsor has been add succesfully');
    }

    }
    //---------------------destroy function------------//

    
    public function destroy($uid)
    {
        WebUser::where('id',base64_decode($uid))->delete();
        sponsor::where('user_id',base64_decode($uid))->delete();
    
        return redirect('admin/sponsor/new?u=4');
    
    }


    public function sponsornew(){
        $sponsors = sponsor::paginate(10);
        return view('web.pages.sponsor-show',compact('sponsors'));
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

public function email_verification($email){


       $userId = WebUser::where('email',base64_decode($email))->value('id');
       $userType = WebUser::where('email',base64_decode($email))->value('user_type');
        
       if(sponsor::where('user_id',$userId)->first()){
           $template = "sponsor";
       }
       elseif(internship::where('user_id',$userId)->first()){
        $template = "intern";
      }
      elseif(Employee::where('user_id',$userId)->first()){
        $template = "employee";
    }
    elseif(FocusGroup::where('user_id',$userId)->first()){
        $template = "focus";
    }
    elseif(partner::where('user_id',$userId)->first()){
        $template = "partner";
    }
    elseif(Judge::where('user_id',$userId)->first()){
        $template = "judges";
    }
    else{

        $template = "audition";

        if($userType == 'Performing Artist' || $userType == 'Artisan Performance'){
            $template = "bwtstudio";

        }

    }




        $userEmail = base64_decode($email);
        $subject = "Complete your profile: Bwt";
        $this->sendMail("$template",$userEmail,$subject,0);

        $data = [
            'user_id'=>$userId
        ];     
   
        return view('email_verification',compact('data'));


}

// public function delete($uid){

//     WebUser::where('id',base64_decode($uid))->delete();
//     sponsor::where('user_id',base64_decode($uid))->delete();

//     return redirect('admin/sponsor/new?u=4');


// }
    

}
    