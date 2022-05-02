<?php

namespace App\Http\Controllers;
use App\Controllers;
use App\partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{

    //-----------------index function--------------//

    public function index(){
        $partners = partner::paginate(10);
        return view('admin.partner.index',compact('partners'));
    }

    //---------------------create function-------------------//

    public function create(){
        $partners = partner::all();
        return view('admin.partner.create',compact('partners'));
    }

    //---------------------store function------------------//

    public function store(Request $request){

        $request->validate([
            'image'=>'required',           
        ]);

        $partners = new partner;
        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $partners->image =$input;
        }
       
        $partners->save();
        
        return redirect(route('admin.partner.index'))->with('success','Partner has been added successfully!');    

    }


    //---------------edit function--------------------------------------//


    public function edit($id){

    $partners = partner::find($id);
    return view('admin.partner.edit',compact('partners'));
    
}


//------------------update function---------------------------------------//

    public function update(Request $request,$id){

        $request->validate([
            'image'=>'required',           
        ]);

        $partners = partner::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $partners->image =$input;
        }
       
        $partners->save();
        
        return redirect(route('admin.partner.index'))->with('success','Partner has been added successfully!'); 


    } 

    //------------------------delete function------------------------//

    public function destroy(Request $request){
        {
            if(!$request->id){
                return redirect(route('admin.partner.index'))->with('errormsg','OPPS! There was an error, data not found!');
            }
            $page = partner::find($request->id);
    
            if ($page->delete()) {
                return redirect(route('admin.partner.index'))->with('success','Record deleted successfully !');
            }else{
                return back()->with('errormsg','OPPS! There was an error!');
            }
        }
    
    }


    public function partnernew(){
        $partners= partner::paginate(20);
        return view('web.pages.partner-show',compact('partners'));

    }
}
