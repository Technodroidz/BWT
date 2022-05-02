<?php

namespace App\Http\Controllers;

use App\Boutique;
use Illuminate\Http\Request;

class BoutiquesController extends Controller
{

    public function index(){
        $boutiques= Boutique::paginate(20);
        return view('boutique.index',compact('boutiques'));

    }

    public function create(){
        $boutiques = Boutique::all();
        return view('boutique.create',compact('boutiques'));
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'image'=>'required',
        ]);
        $user = auth()->guard('web_user')->user();
        
        $boutique['name']=$request->name;
        $boutique['decription']=$request->decription;
        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $boutique['image'] =$input;
        }
        $user->boutique()->create($boutique);
        return redirect('stores')->with('success','Boutique has been added successfully!');
        
    }
    


    public function edit($id){
        $boutiques= Boutique::find($id);
        return view('boutique.edit',compact('boutiques'));
      
    }
     
    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'image'=>'required',
        ]);
          
        $boutiques =  Boutique::find($id);
        $boutiques->name=$request->name;
        $boutiques->decription=$request->decription;
        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $boutiques->image =$input;
        }
        $boutiques->save();
        return redirect(route('boutique.index'))->with('success','Sponsor has been added successfully!');
        
    }

 
    
    public function destroy(Request $request){

        if(!$request->id){
            return redirect(route('boutiue.index'))->with('errormsg','OPPS! There was an error, data not found!');
        }
        $page = Boutique::find($request->id);

        if ($page->delete()) {
            return redirect(route('boutique.index'))->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }

    }
}
