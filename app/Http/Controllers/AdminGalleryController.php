<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class AdminGalleryController extends Controller
{

public function index(Request $request){
    $admingalleries= Gallery::when($request->name,function($q) use($request){
        $q->where('name','like','%'.$request->name.'%');
    })->paginate(500)->appends($request->all());
    return view('admin.admingallery.index',compact('admingalleries'));
}

public function create(){
    return view('admin.admingallery.create');

}


public function store(Request $request){

    $request->validate([
       'image'=>'required',
    //    'sort_order'=>'required'
    ]);
         $admingalleries = new Gallery;
         $admingalleries->sort_order=$request->sort_order;
         $admingalleries->user_id=0;
        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads/gallery';
            $file->move($path, $input);
            $admingalleries->image =$input;
        }
        $admingalleries->save();
        return redirect(route('admin.gallery.index'))->with('Image has been added successfully ');
}





    public function edit($id){
           $admingalleries= Gallery::find($id);
            return view('admin.admingallery.edit',compact('admingalleries'));

 }



public function update(Request $request,$id){

            $admingalleries = Gallery::find($id);
           $admingalleries->sort_order=$request->position_name;

           if($request->file('image')){
              $file = $request->file('image');
              $input = time().'.'.$file->getClientOriginalExtension();
              $path = public_path().'/uploads/gallery';
              $file->move($path, $input);
              $admingalleries->image =$input;
              }
              $admingalleries->save();
              return redirect(route('admin.gallery.index'))->with('information is updated successfully');
    }




        public function destroy(Request $request){
            if(!$request->id){
                return redirect(route('admin.gallery.index'))->with('error msg','that was an error');
            }
              $page= Gallery::find($request->id);
              if($page->delete()){
                  return redirect(route('admin.gallery.index'))->with('success','record delete successfully');
              }else{
                  return back()->with('error msg','that was an error');
              }

            }

            public function changestatus(Request $request){

                $find = Gallery::find($request['id']);
                if(!empty($find)){
                    $find->status = $request['status'];
                    $find->save();
                    return json_encode(['success'=>true]);
                   }else{
                       return json_encode(['success'=>false]);
                        }

            }


            public function admingallerynew(){
                $galleries = Gallery::where('user_id',0)->orderBy('sort_order')->get();
                 return view('web.pages.gallery',compact('galleries'));
            }



        }



