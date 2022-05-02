<?php

namespace App\Http\Controllers;

use App\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create(){
        return view('web.pages.feedback');
    }

    public function store(Request $request){

        // $request->validate([
        //     'first_name'=>'required',
        //     'last_name'=>'required',
        //     'email'=>'required',
        //     'subject'=>'required',
        //     'phone_no'=>'required',
        //     'message'=>'required',
        // ]);
        // $feedbacks= new feedback;
        // $feedbacks->first_name=$request->first_name;
        // $feedbacks->last_name=$request->last_name;
        // $feedbacks->email=$request->email;
        // $feedbacks->phone_no=$request->phone_no;
        // $feedbacks->subject=$request->subject;
        // $feedbacks->message=$request->message;
        // $feedbacks->save();

        $data =    [
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'subject'=>$request->phone_no,
            'phone_no'=>$request->subject,
            'message'=>$request->message,
        ];

        feedback::create($data);

        // return redirect(route('feedback.create'))->with('Thanks for Feedback');
        return redirect('/help?u=a1');

    }


    public function index(Request $request){
        $feedbacks = feedback::when($request->first_name,function($q) use($request){
            $q->where('first_name','like','%'.$request->first_name.'%');
        })
        ->when($request->last_name,function($q) use($request){
            $q->where('last_name','like','%'.$request->last_name.'%');
        })
        ->latest()->paginate(10)->appends($request->all());
        return view('admin.feedback.index',compact('feedbacks'));
    }
}
