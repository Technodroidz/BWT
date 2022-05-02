<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pages;
use Illuminate\Http\Request;

class CmsPagesController extends Controller
{
    //

    public function index(Request $request){
        $pages =  Pages::when($request->page_name,function($q) use($request){
            $q->where('page_name','like','%'.$request->page_name.'%');
        })
        ->latest()->paginate(10)->appends($request->all());
        return view('admin.cmspages.list', compact('pages'));
    }


    public function create(){

        return view('admin.cmspages.create');

    }

    public function store(Request $request)
    {
        // return $request->all();

        $validator = \Validator::make($request->all(), [
            'name'=>'required',
            'description'=>'required'
        ]);

        if($validator->fails()){

            $response['error'] =$validator->errors()->toArray();

            foreach($response['error'] as $error){

                $request->flash();
                return redirect(route('admin.cms_pages.create'))->with('errormsg', implode('',$error));

            }
        }
        $check_page = Pages::where('page_name',$request->name)->first();

        if($check_page){
            $request->flash();
            return redirect(route('admin.cms_pages.create'))->with('errormsg', 'page is already exits!');
        }

        $new_page = New Pages();
        $new_page->page_name = $request->name;
        $new_page->slug =str_slug($request->name);
        $new_page->page_description = $request->description;
        $new_page->status = '0';
        $new_page->save();


        $request->flash();
        return redirect(route('admin.cmspages'))->with('success', 'New page added successfully!');

    }


    public function edit(Request $request){

        $page = Pages::find($request->id);

        return view('admin.cmspages.edit',compact('page'));
    }


    public function update(Request $request)
    {
        // return $request->id;

        $page = Pages::find($request->id);
        $page->page_name = $request->name;
        $page->page_description= $request->description;
        $page->slug = str_slug($request->name);
        $save = $page->save();
        if ($save) {
            return redirect(route('admin.cmspages'))->with('success','Record updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }



    public function delete(Request $request){

        if(!$request->id){
            return redirect(route('admin.cmspages'))->with('errormsg','OPPS! There was an error, data not found!');
        }
        $page = Pages::find($request->id);

        if ($page->delete()) {
            return redirect(route('admin.cmspages'))->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }


    }


    public function changeStatus(Request $request){


        $find = Pages::find($request['id']);
        if (!empty($find)) {
             $find->status = $request['status'];
             $find->save();
             return json_encode(['success'=>true]);
         }else{
            return json_encode(['success'=>false]);
         }
    }



}
