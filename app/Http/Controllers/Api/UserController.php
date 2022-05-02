<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\AdmissionClass;
use App\State;
use App\HomeBanner;
use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Storage;
// use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
// use App\Http\Requests\RegistrationRule;

class UserController extends BaseController
{
    public function index(Request $request,$id='')
    {
        $data = null;
        if (empty($id)) {
            $data = Auth::user();
            return self::sendResponse($data, 'User Data!');
        }else{
            $data = User::find($id);
            return self::sendResponse($data, 'User Data!');
        }
        return self::sendResponse($data, 'OPPS! User not found!');
    }
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function getOtp(Request $request){
        $data =$dataSet= $profile = array();
        // print_r($request->all());die();
        $validator = Validator::make($request->all(), [
            'mobile'     => 'required|digits:10',
        ]);

        if ($validator->fails()) {
            return self::sendError(400,null, $validator->errors()->first(),'');
        }
        $data['mobile'] = $request->mobile;
        $otp = rand(100000,999999);
        $number = $request->mobile;
        // $msg = '<#>%20'.$otp."%20is%20your%20otp%20for%20verification%20of%20phone%20number%20with%20GURUJI.Do%20not%20share%20this%20with%20anyone.%20IpxOryM3HmO";
        $msgg = "<#> Your GURUJI OTP is: ".$otp."\nIpxOryM3HmO";
        $msg   =urlencode($msgg);
        // $msg= \sprintf("<%%23> Your OTP to update mobile number is: %d %%0A %s", $otp, 'IpxOryM3HmO');
        $SENDERID  = env('SMS_API_SENDER_ID');
        $SENDERKEY = env('SMS_API_SENDER_KEY');
        // print_r($SENDERID);echo $SENDERKEY;die;

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://sms.pearlsms.com/public/sms/send?sender=$SENDERID&smstype=TRANS&numbers=".$number."&apikey=".$SENDERKEY."&message=$msg",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $data['msg']=$msg;
        $userData = User::where('mobile',$number)->first();
        if (empty($userData)) {
	    	$dataSet['mobile']  = $request->mobile;
	    	$dataSet['otp']     = $otp;
	    	$dataSet['role_id'] = 1;
	    	$user = User::create($dataSet);
            $data['user_id'] = $user->id;
        }else{
            $userData->otp = $otp;
            $userData->update();
            $data['user_id'] = $userData->id;
            // print_r($data);die();
        }
        // print_r($data);die();
        return self::sendResponse($data, 'OTP Send Successfully!');
    }
    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
    
        $data =$dataSet= $profile = array();
        $validator = Validator::make($request->all(), [
            'mobile'=> 'required|digits:10',
            'otp'   => 'required|digits:6',
        ]);

        if ($validator->fails()) {
            return self::sendError(200,null, $validator->errors()->first(),'');
        }
        $credentials = ['mobile'=>$request->mobile, 'otp'=>$request->otp];
        $userDataSet = User::where($credentials)->first();

        if(empty($userDataSet)){
        	return self::sendResponse([], 'OPPS! Invalid OTP!');
        }
        $userLogin = Auth::login($userDataSet);//
        $user      = User::with('state:id,english_name as name')->find(Auth::id());//Auth::user();
        // $user->otp = null;
        $user->update();
        $tokenResult          = $user->createToken('MyApp')->accessToken;
        $data['user_id']      = Auth::id();
        $data['access_token'] = $tokenResult;
        $data['token_type']   = 'Bearer';

        // $profile['user_id']   = Auth::id();
        $data['isLogin'] = true;
        $data['name']    = $user->name;
        $data['email']   = $user->email;
        $data['state_id']= $user->state;
        if (empty($user->name) || empty($user->email) || empty($user->state_id)) {
            $data['isLogin']= false;
            $data['name']=$data['email']=$data['state_id']=null;
        }
        // elseif (empty($user->journey_start)) {
        //     $profile['journey_start'] = 0;
        //     return self::sendError(400,$profile, 'Please Complete Your Profile!','');

        // }elseif (empty($user->role_id)) {
        //     $profile['user_role'] = 0;
        //     return self::sendError(400,$profile, 'Please Complete Your Profile!','');

        // }else{
            // $tokenResult = $user->createToken('MyApp')->accessToken;
            // $profile['user']       = Auth::user();
            // $profile['access_token']  = $tokenResult;
            // $profile['token_type']    = 'Bearer';

            return self::sendResponse($data, 'Successfully login!');
        // }
    }

    public function updateBasicDetails( Request $request)
    {
        $user = Auth::user();
        if (empty($user)) {
            return self::sendResponse([], 'OPPS! User not found !');
        }
        if ($request->hasFile('thumbnail')) {
            $thumbnail  = $request->thumbnail;
            $image      = $request->file('thumbnail');
            $newimg     = rand().'_'.time().'_'.$image->getClientOriginalname();
            $storeImage = $request->file('thumbnail')->storeAs('public/avatar', $newimg);
            $user->thumbnail     = $newimg;
        }
        $user->name              = $request->name;
        $user->email             = $request->email;
        // $user->dob               = $request->dob;
        // $user->gender            = $request->gender;
        // $user->basic_details     = 1;
        $user->ip_address        = $request->ip();
        // $user->total_coin_amount = 1;
        // $user->deafult_language  = $request->deafult_language ?? 'hindi';
        $user->state_id          = $request->state_id ;
        $user->update();
        return self::sendResponse($user, 'Data updated successfully!');
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id'=> 'required',
        ]);
        if ($validator->fails()) {
            return self::sendError(200,null, $validator->errors()->first(),'');
        }
        $user = User::find($request['user_id']);
        if (empty($user)) {
            return self::sendResponse([], 'OPPS! User not found !');
        }
        if ($request->hasFile('thumbnail')) {
            $thumbnail  = $request->thumbnail;
            $image      = $request->file('thumbnail');
            $newimg     = rand().'_'.time().'_'.$image->getClientOriginalname();
            $storeImage = $request->file('thumbnail')->storeAs('public/avatar', $newimg);
            $user->thumbnail = $newimg;
        }
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->ip_address = $request->ip();
        $user->state_id   = $request->state_id ;
        $user->device_id  = $request->device_id ;
        $user->update();
        $user = User::with('state:id,english_name as name')->find($user->id);
        $data['user_id'] =$user->id ;
        $data['name']    =$user->name ;
        $data['email']   =$user->email ;
        $data['mobile']  =$user->mobile ;
        $data['state_id']=$user->state ;
        $data['image']   =$user->thumbnail ;
        return self::sendResponse($data, 'Data updated successfully!');
    }
    public function getAllCourse(Request $request)
    {
        $uri2 = $request->segment(2);
        if ($uri2=='v2') {
            $selected = ['id','english_name'];
        }elseif ($uri2=='v1') {
            $selected = ['id','hindi_name'];
        }else{
            $selected = '*';
        }
        try {
            $listData = AdmissionClass::where('active',1)->select($selected)->get();
            if (!empty(count($listData))) {
                return self::sendResponse($listData, 'Data retrive successfully!');
            }else{
                return self::sendResponse([], 'No record found!');
            }
        } catch (Exception $e) {
            return self::sendError(400,[], $e,'');
        }

    }
    public function getAllState(Request $request)
    {
        $uri2 = $request->segment(2);
        if ($uri2=='v2') {
            $selected = ['id','english_name as name'];
        }elseif ($uri2=='v1') {
            $selected = ['id','english_name as name'];
        }else{
            $selected = '*';
        }
        try {
            $listData = State::where('active',1)->select($selected)->get();
            if (!empty(count($listData))) {
                return self::sendResponse($listData, 'Data retrive successfully!');
            }else{
                return self::sendResponse([], 'No record found!');
            }
        } catch (Exception $e) {
            return self::sendError(400,[], $e,'');
        }

    }
    public function getAllBanner(Request $request, $id='')
    {
        try {
            $listData = HomeBanner::where(['active'=>1])->select(['id','title','thumbnail'])->get();
            if (!empty(count($listData))) {
                return self::sendResponse($listData, 'Data retrive successfully!');
            }else{
                return self::sendResponse([], 'No record found!');
            }
        } catch (Exception $e) {
            return self::sendError(400,[], $e,'');
        }
    }
}
