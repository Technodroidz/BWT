<?php

namespace App\Http\Controllers;

use App\report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function create(){
        $reports =report::all();
        return view('web.pages.report',compact('reports'));
    }

    public function store(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
        $feedbacks= new report;
        $feedbacks->first_name=$request->first_name;
        $feedbacks->last_name=$request->last_name;
        $feedbacks->email=$request->email;
        $feedbacks->subject=$request->subject;
        $feedbacks->message=$request->message;
        $feedbacks->save();
        return redirect(route('report.create'))->with('Thanks for Feedback');
    }


//    public function index(){
  //      $feedbacks = report::paginate(10);
    //    return view('admin.feedback.index',compact('feedbacks'));
    //}
}
