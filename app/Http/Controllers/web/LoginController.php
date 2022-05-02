<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect,URL;

// use App\WebUser;
// use App\Channel;

class LoginController extends Controller
{
    //



    public function index(){

        $requestURL = [];
        $requestURL[] = URL::previous();
        return view('web.auth.login',compact('requestURL'));
    }


    public function channel_name(){

        return view('web.auth.channel-name');

    }
    public function sign_auditions()
    {
        return view('web.auth.auditionlogin');
    }

    public function login(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()){

            $response['error'] =$validator->errors()->toArray();

            foreach($response['error'] as $error){

                $request->flash();
                return redirect('/sign-in')->with('danger', implode('',$error));

            }
        }

        // $count = WebUser::where('email',$request->email)->count();
        // if($count >= 1){
        //     $uid = WebUser::where('email',$request->email)->value('id');
        //       $count = Channel::where('user_id',$uid)->count();
        //       if($count == 0){
                  
        //         $request->flash();
        //         return redirect('/sign-in')->with('danger', 'Access Denied!');
        //       }
        // }

        if(!Auth::guard('web_user')->attempt(array('email' => $request->email, 'password' => $request->password)))
            {
                // if(auth()->user()->role_id == 6){


                $request->flash();
                return redirect('/sign-in')->with('danger', 'Wrong email address or password !');
                // }
            }
            
          if($_SERVER['HTTP_REFERER']==url('sign-in-auditions'))
          {
                $request->flash();
                return redirect('/personalInfo')->with('success', 'Login Succeffuly!');
          }
          else
          {
            // return $request->reqURL;
            // return URL::previous();
            $request->flash();
            return Redirect::to($request->reqURL);
          }

    }


    public function logout(){


        Auth::guard('web_user')->logout();

        return redirect('/')->with('success', 'You have successfully logout !');
    }








}
