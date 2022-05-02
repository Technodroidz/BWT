<?php

namespace App\Http\Controllers\Admin;

use App\HomeBanner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listData = HomeBanner::when($request->title,function($q) use($request){
            $q->where('title','like','%'.$request->title.'%');
        })
        ->latest()->paginate(10)->appends($request->all());
        return view('admin.banner.list',compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        return view('admin.banner.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $data['thumbnail'] =$input;
            $data['thumbnail_copy'] = $input;

        }
        $data['title']         = $request->title;
        $data['description']   = $request->email; 
        $save = HomeBanner::create($data);
        if ($save) {
            return redirect(route('admin.banner.index'))->with('success','Record save successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function show(HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeBanner $homeBanner,$id)
    {  
        $homeBanner = HomeBanner::find($id); 
        return view('admin.banner.edit',compact('homeBanner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeBanner $homeBanner,$id)
    {
        $homeBanner = HomeBanner::find($id);
       
        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $homeBanner->thumbnail=$input;
            $homeBanner->thumbnail_copy = $input;
        }
        $homeBanner->title         = $request->title;
        $homeBanner->description   = $request->description;  
        $save = $homeBanner->save();
        if ($save) {
            return redirect(route('admin.banner.index'))->with('success','Record updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeBanner $homeBanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeBanner  $homeBanner
     * @return \Illuminate\Http\Response
     */
    public function delete($id='')
    {
        $homeBanner = HomeBanner::find($id); 
        if ($homeBanner->delete()) {
            return redirect(route('admin.banner.index'))->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    } 
    public function changeStatus(Request $request)
    {
       $homeBanner = HomeBanner::find($request['id']);
       if (!empty($homeBanner)) {
            $homeBanner->active = $request['status'];
            $homeBanner->save();
            return json_encode(['success'=>true]);
        }else{
           return json_encode(['success'=>false]); 
        } 
    }
    
}
