<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function create(){
         
         return view('web.pages.contact');
     }

  

       public function index(Request $request){
         $contacts = contact::when($request->name,function($q) use($request){
            $q->where('name','like','%'.$request->name.'%');
        })
        ->latest()->paginate(10)->appends($request->all());
        return view('admin.contact.index',compact('contacts'));
            }


    
    public function store(Request $request){
        $request->validate([
           'name'=>'required',
           'email'=>'required',
           'subject'=>'required',
        ]);
        $contacts= new contact;
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->subject=$request->subject;
        $contacts->save();
        return redirect(route('contact.create'))->with('Thanks for contact');
    } 
}
