<?php

namespace App\Http\Controllers;
use App\advertiser;

use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
  
    public function index(){
        $advertisers = Advertiser::paginate(10);
        return view('admin.advertiser.index',compact('advertisers'));
    }
    //--------------------------web -show---------------//

    public function new(){
        $advertisers = advertiser::paginate(10);
        return view('web.pages.advertisers',compact('advertisers'));
    }


    //----------------------------create function----------------------//


    public function create(){
        return view('admin.advertiser.create');
    }

//------------------------store function-------------------------//

    public function store(Request $request){

        $request->validate([
             'image'=>'required',           
        ]);

        $advertisers = new Advertiser;
       
        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $advertisers->image =$input;
        }
        
        $advertisers->save();
        
        return redirect(route('admin.advertiser.index'))->with('success','Advertiser has been added successfully!');

        

    }


 
         //---------------------------edit function-----------------//


         public function edit($id){
             $advertisers = advertiser::find($id);
             return view('admin.advertiser.edit',compact('advertisers'));

             
         }
        //-----------------------update function-------------------//
          

        public function update(Request $request,$id){

            $request->validate([
                
                 'image'=>'required',   
            ]);
    
            $advertisers = advertiser::find($id);
           
            if($request->file('image')){
                $file = $request->file('image');
                $input = time().'.'.$file->getClientOriginalExtension();
                $path = public_path().'/uploads';
                $file->move($path, $input);
                $advertisers->image =$input;
                $advertisers->save();
    
                return redirect(route('admin.advertiser.index'))->with('sucess','sponsor has been add succesfully');
        }
    
        }

            //------------------------delete function---------------------------//

            public function destroy(Request $request)
            {
                if(!$request->id){
                    return redirect(route('admin.advertiser.index'))->with('errormsg','OPPS! There was an error, data not found!');
                }
                $page = advertiser::find($request->id);
        
                if ($page->delete()) {
                    return redirect(route('admin.advertiser.index'))->with('success','Record deleted successfully !');
                }else{
                    return back()->with('errormsg','OPPS! There was an error!');
                }
            }


            public function changestatus(Request $request){

                $find = advertiser::find($request['id']);
                if(!empty($find)){
                    $find->status = $request['status'];
                    $find->save();
                    return json_encode(['success'=>true]);
                   }else{
                       return json_encode(['success'=>false]);
                        }
                                
            }
    
    
            public function advertisernew(){
                $advertisers = advertiser::paginate(20);
                 return view('web.pages.advertiser-show',compact('advertisers'));
            }
        


    
        }


