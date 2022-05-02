<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\usercategory;
use App\WebUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use DB;


class RegisterController extends Controller
{
    //

    public function index(){
        $categories = usercategory::where('parent_id',0)->get();
        return view('web.auth.register',compact('categories'));
    }


    public function storeUser(Request $request)
    {
        // dd($request->all());
        // return $request->all();
        $validator = Validator::make($request->all(), [
                "phone" => "required|",
                "dob_dd" => "required|",
                "dob_mm" => "required|",
                "dob_yy" => "required|",
                "first_name" => "required|",
                "last_name" => "required|",
                "email" => "required|email",
                "verify_email" => "required|email",
                "password" => "required|",
                "verify_password" => "required|",
                "term_and_condition" => "required|",
                "content_permission" => "required|",
                // "adult_checkbox" => "required|",
                // "us_citizen" => "required|",
                // "legal_permanent" => "required|",
                // "proof_of_residence" => "required|",
                // "authorization_card"=> "required|",
                // "photo_and_video" => "required|",
                // "apply_competition" => "required|",
                // "apply_busker_performance" => "required|",

            ]);

        if($validator->fails()){

            $response['error'] =$validator->errors()->toArray();

            foreach($response['error'] as $error){

                $request->flash();
                return redirect('/sign-up')->with('danger', implode('',$error));

            }

        }

        if($request->email !== $request->verify_email){
            $request->flash();
            return redirect('/sign-up')->with('danger','Email address is not matched !');

        }

        if($request->password !== $request->verify_password){
            $request->flash();
            return redirect('/sign-up')->with('danger','Password is not matched !');
        }

        $check_user = WebUser::where('email',$request->email)->first();

        if($check_user){
            $request->flash();
            return redirect('/sign-up')->with('danger', 'Email address is already registered with us !');
        }

        $dob = $request->dob_dd.'-'.$request->dob_mm.'-'.$request->dob_yy;

        if(empty($request->state))
        {
            $request->state="";
        }

        $new_user = New WebUser();
        $new_user->name = $request->first_name.' '.$request->last_name;
        $new_user->mobile = $request->phone;
        $new_user->dob = $dob;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->password);
        $new_user->term_and_condition = $request->term_and_condition;
        $new_user->content_permission= $request->content_permission;
        $new_user->adult_checkbox = $request->adult_checkbox;
        $new_user->us_citizen = 1;
        $new_user->legal_permanent = 1;
        $new_user->proof_of_residence = 1;
        $new_user->authorization_card = 1;
        $new_user->photo_and_video = 1;
        $new_user->apply_competition = $request->apply_competition;
        $new_user->apply_busker_performance = $request->apply_busker_performance;
        // $new_user->state=$request->state;
        $new_user->category_id=$request->category;
        $new_user->save();

        // $new_user->channel()->create(['name'=>'Beta Channel','status'=>1]);

        
      if(!empty($request->ChannelName)){
        $new_user->channel()->create(['name'=>$request->ChannelName,'status'=>1]);

      }else{
        $new_user->channel()->create(['name'=>'Beta Studio','status'=>1]);

      }

        Auth::guard('web_user')->login($new_user, true);

        if($_SERVER['HTTP_REFERER']==url('sign-in-auditions'))
          {
                $request->flash();
                //return redirect('/personalInfo')->with('success', 'Register Succeffuly!');
                return redirect('/profile')->with('success', 'Register Succeffuly!');
          }
          else
          {
            $request->flash();
           // return redirect('/sign-in')->with('success','Record is successfully registered');
           return redirect('/profile')->with('success','Profile created successfully');
          }


    }

    public function joinauditions(Request $request)
    {

       

        if($request->iscontinue == 2){ //complete register after questionare submission
            $data = $request->all();
            $userId = $data['user_id'];
            unset($data['_token']);
            unset($data['iscontinue']);
            unset($data['user_id']);

           // print_r($userId);die; 
           // print_r($data);die;

            DB::table('auditions')->where('user_id',$userId)->update($data);     
            WebUser::where('id',$userId)->update(["status"=>'Completed']);

            $userType = WebUser::where('id',$userId)->value('user_type');

            $st = 1;

            if($userType == 'Performing Artist' || $userType == 'Artisan Performance'){
                $st = 6;
    
            }

            return redirect('/auditions/b/success?type='.$st)->with('success','Record is successfully registered');

        //   WebUser::where('id',$request->user_id)->update(["profile_image"=>@$profile_image]);
        //   return redirect('/personalInfo/final?a='.$userId.'&b=1')->with('success','Record is successfully registered');
        }

        $count = WebUser::where('email',$request->Email)->count();
        if($count > 0){
        if($request->iscontinue == 3){ //when continue later users come with media file

            if(!empty($request->file('photo')))
            {
            $file = $request->file('photo');
            $test=$file->move(base_path('public/auddition_media_upload/'), $file->getClientOriginalName());
            $photo=$file->getClientOriginalName();
    
            copy('/var/www/html/public/auddition_media_upload/'.$file->getClientOriginalName(),'/var/www/html/public/storage/profile/'.$file->getClientOriginalName());
    
            $profile_image=$file->getClientOriginalName();
    
    
            }
    
            if(!empty($request->file('video')))
            {
            $file = $request->file('video');
            $test=$file->move(base_path('public/auddition_media_upload/'), $file->getClientOriginalName());
            $video=$file->getClientOriginalName();
            }

            $array=array(              
                "photo"=>@$photo,
                "video"=>@$video,
                );

          $userId = WebUser::where('email',$request->Email)->value('id');
          DB::table('auditions')->where('user_id',$userId)->update($array);                
          WebUser::where('id',$userId)->update(["profile_image"=>@$profile_image]);

          $subject = "Your Signup data submitted : BwtStudio";
          $this->sendMail("verification",$request->Email,$subject,5);

          return redirect('/auditions/b/success?type=3')->with('success','Record is successfully registered');


        }
    }

        $user = auth()->guard('web_user')->user();
        $request->validate([
            'name'=>'required',
            'CellPhone'=>'required',
            'Email'=>'required|unique:web_users,email,'.optional($user)->id
        ],[
            'Email.unique'=>'The email has already registered. Please login.'
        ]);

        if($request->iscontinue == 3){
        if(!empty($request->file('photo')))
        {
        $file = $request->file('photo');
        $test=$file->move(base_path('public/auddition_media_upload/'), $file->getClientOriginalName());
        $photo=$file->getClientOriginalName();

        copy('/var/www/html/public/auddition_media_upload/'.$file->getClientOriginalName(),'/var/www/html/public/storage/profile/'.$file->getClientOriginalName());

        $profile_image=$file->getClientOriginalName();


        }

        if(!empty($request->file('video')))
        {
        $file = $request->file('video');
        $test=$file->move(base_path('public/auddition_media_upload/'), $file->getClientOriginalName());
        $video=$file->getClientOriginalName();
        }

        }

        if(!$user){
            $user = WebUser::create([
                'name'=>$request->name,
                'email'=>$request->Email,
                'mobile'=>$request->CellPhone,
                'password'=>\Hash::make($request->password),
                // 'password'=>bcrypt($request->password),
                'us_citizen' => 1,
                'status' => 'Pending',
                'user_type' => $request->user_type,
                'legal_permanent' => 1,
                'proof_of_residence' => 1,
                'authorization_card' => 1,
                'photo_and_video' => 1,
                "profile_image"=>@$profile_image,
                "category_id"=>@$request->category,


            ]);
        }

      if(!empty($request->ChannelName)){
        $user->channel()->create(['name'=>$request->ChannelName,'status'=>1]);

      }else{
        $user->channel()->create(['name'=>'Beta Studio','status'=>1]);

      }

 
        $array=array(
            "name"=>$request->name,
            "age"=>$request->age,
            "StreetAddress"=>$request->StreetAddress,
            "TownCity"=>$request->TownCity,
            "state"=>$request->state,
            "ZipCode"=>$request->ZipCode,
            "country"=>$request->country,
            "Email"=>$request->Email,
            "CellPhone"=>$request->CellPhone,
            "HomePhone"=>$request->HomePhone,
            "cmbActType"=>$request->cmbActType,
            "cmbActMembers"=>$request->cmbActMembers,
            "txtProPerformerName"=>$request->txtProPerformerName,
            "cmbHoursPerMonth"=>$request->cmbHoursPerMonth,
            "txtHoursPerMonthOther"=>$request->txtHoursPerMonthOther,
            "cmbPerformanceType"=>$request->cmbPerformanceType,
            "cmbBuskingLength"=>$request->cmbBuskingLength,
            "txtBuskingLengthOther"=>$request->txtBuskingLengthOther,
            "cmbPrivateEvents"=>$request->cmbPrivateEvents,
            "txtPrivateEventsDetails"=>$request->txtPrivateEventsDetails,
            "Anniversaries"=>$request->Anniversaries,
            "Birthdays_Parties"=>$request->Birthdays_Parties,
            "Companies_and_Organizations_Events"=>$request->Companies_and_Organizations_Events,
            "Galleries_and_Restaurants"=>$request->Galleries_and_Restaurants,
            "Special_Venues"=>$request->Special_Venues,
            "Sports_Events"=>$request->Sports_Events,
            "Weddings"=>$request->Weddings,
            "Other_Special_Occasions"=>$request->Other_Special_Occasions,
            "photo"=>@$photo,
            "video"=>@$video,
            "user_id"=>$user->id,
            );
            if ($user->audition) {
                DB::table('auditions')->where('id',$user->audition->id)->update($array);
            } else {
                DB::table('auditions')->insert($array+["audition_id"=>\Str::uuid()]);
            }


         

            // $request->flash();

            if(!Auth::guard('web_user')->attempt(array('email' => $request->Email, 'password' => $request->password)))
            {
                // if(auth()->user()->role_id == 6){


                $request->flash();
                // return redirect('/sign-in')->with('danger', 'Wrong email address or password !');
                // }
            }

         
 
            // if (Auth::attempt(['email' => $request->Email, 'password' => $request->password])) {
            //    return Auth::user(); 
            // }

            // $subject = "Your audition request has been received : Bwt";
            // $this->sendMail("audition",$request->Email,$subject,1);

           if($request->iscontinue == 3){ //for register user not continue later users
            
            $subject = "Your Signup data submitted : BwtStudio";
            $this->sendMail("verification",$request->Email,$subject,5);

           }

           if($request->iscontinue == 1){ //for continue later users
            
            return redirect('/auditions/b/success?type=2')->with('success','Record is successfully registered');
            

           }

            // return redirect('/auditions')->with('success','Record is successfully registered');
            if(!empty($request->c_later)){
            return redirect('/auditions/a/success')->with('success','Record is successfully registered');
            }else{
            // return redirect('/personalInfo/final?a='.$user->id.'&b=0')->with('success','Please submit final data.');
            return redirect('/auditions/b/success?type=4')->with('success','Record is successfully registered');

            }
    }


    public function show($id)
    {
        $user = WebUser::findOrFail($id);
        $audition = DB::table('auditions')->where('user_id',$id)->first();
       // print_r($audition);die;
        return view('admin.user.show',compact('user','audition'));
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
