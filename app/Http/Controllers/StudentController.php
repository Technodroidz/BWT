<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){
        $students = student::when($request->name,function($q) use($request){
            $q->where('name','like','%'.$request->name.'%');
        })
        ->when($request->position,function($q) use($request){
            $q->where('position','like','%'.$request->position.'%');
        })
        ->latest()->paginate(10)->appends($request->all());
        return view('admin.student.index',compact('students'));
    }

    public function create(){

        return view('student.create');
    }





    public function store(Request $request){
            $request ->validate([
                'name'=>'required',
                'position'=>'required',
                'image'=>'required',
                'decription'=>'required',
            ]);

            $students = new student;
            $students->name=$request->name;
            $students->position=$request->position;
            $students->decription=$request->decription;
            if($request->file('image')){
                $file = $request->file('image');
                $input = time().'.'.$file->getClientOriginalExtension();
                $path = public_path().'/uploads';
                $file->move($path, $input);
                $students->image =$input;
            }
            $students->save();
             return redirect(route('student.create'))->with('success','student was add successfully');
        }


        public function edit($id){
            $students= student::find($id);
            return view('student.edit',compact('students'));

        }



        public function update( Request $request,$id){

            $request->validate([
                'name'=>'required',
                'age'=>'required',
                'contact_no'=>'required',
                'address'=>'required',
            ]);

            $students = student::find($id);
            $students->name=$request->name;
            $students->age=$request->age;
            $students->contact_no=$request->contact_no;
            $students->address=$request->address;
            $students->save();
            return redirect(route('student.index'))->with('success','student was updatees');

        }


        public function destroy(Request $request){


                if(!$request->id){
                    return redirect(route('student.index'))->with('error','missing field');
                }
                $page = student::find($request->id);
                if($page->delete()){
                    return redirect(route('student.index'))->with('success','delete successfully');
                 }
                  else{
                     return redirect(route('student.index'))->with('error','Oops an error');
                  }
                }
        }

