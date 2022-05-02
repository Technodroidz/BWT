<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request)
    {

        $members = Member::when($request->name,function($q) use($request){
            $q->where('name','like','%'.$request->name.'%');
        })
        ->when($request->position,function($q) use($request){
            $q->where('position','like','%'.$request->position.'%');
        })
        // ->latest()->paginate(10)->appends($request->all());
        ->where('type',$request->r)->latest()->paginate(10)->appends($request->all());

        return view('admin.member.list', compact('members'));
    }

//----------create function----// 

    public function create()
    {
        $members = Member::all();
        return view('admin.member.create',compact('members'));
    }


//----------store funcion-------//
     public function store( Request $request)
     {

        // return $request->all();
        $request->validate([  
            'name'=>'required',  
            'position'=>'required',  
            // 'image'=>'required',  
            // 'decription'=>'required',
            // 'type'=>'required',  
            // 'social_links'=>'required|array',            
        ]);  
        
        $member = new Member;    
        $member->name=$request->name;
        $member->position=$request->position;
        $member->decription=$request->decription;
        $member->type=$request->type;
        $member->social_links=$request->social_links;
        $member->status=1;

        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $member->image =$input;
        }
        $member->save();
        
        // return redirect(route('admin.member.index'))->with('successfully Add');
       return redirect(route('admin.member.index','r='.$request->type))->with('success','Member has been created successfully!');


    }

    //---------edit function-------------//


    public function edit($id)
    {
        $member = Member::find($id);
        return view('admin.member.edit',compact('member'));
    }

    //------------------------update function-----------------//

    public function update( Request $request,$id)
    {
       $request->validate([  
           'name'=>'required',  
           'position'=>'required',  
        //    'decription'=>'required',
        //    'type'=>'required',  
        //    'social_links'=>'required|array',            
       ]);  
       $member = Member::find($id);    
       $member->name=$request->name;
       $member->position=$request->position;
       if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $member->image =$input;

       }

       
       $member->decription=$request->decription;
       $member->type=$request->type;
       $member->social_links=$request->social_links;
       $member->status=1;
       $member->save();

       return redirect(route('admin.member.index','r='.$request->type))->with('success','Member has been updated successfully!');

    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Videos  $videos
     * @return \Illuminate\Http\Response
     */
   
     public function destroy(Request $request)
    {
        if(!$request->id){
            return redirect(route('admin.member.index'))->with('errormsg','OPPS! There was an error, data not found!');
        }
        $page = Member::find($request->id);

        if ($page->delete()) {
            return redirect(route('admin.member.index'))->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    //---------update function-----------//

    public function changeStatus(Request $request){

        $find = Member::find($request['id']);
        if (!empty($find)) {
             $find->status = $request['status'];
             $find->save();
             return json_encode(['success'=>true]);
         }else{
            return json_encode(['success'=>false]);
         }
    }

}
