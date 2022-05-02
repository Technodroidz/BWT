<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listData = Language::when($request->name,function($q) use($request){
            $q->where('name','like','%'.$request->name.'%');
        })
        ->latest()->paginate(10)->appends($request->all());
        return view('admin.language.list',compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.language.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = Language::create($request->all());
        if ($save) {
            return redirect(route('admin.language.index'))->with('success','Record save successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    { 
        return view('admin.language.edit',compact('language'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $language)
    {
        $language->name       = $request->name; 
        $save = $language->save();
        if ($save) {
            return redirect(route('admin.language.index'))->with('success','Record updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function delete($id='')
    {
        $language = Language::find($id); 
        if ($language->delete()) {
            return redirect(route('admin.language.index'))->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    public function changeStatus(Request $request)
    {
       $data = Language::find($request['id']);
       if (!empty($data)) {
            $data->active = $request['status'];
            $data->save();
            return json_encode(['success'=>true]);
        }else{
           return json_encode(['success'=>false]); 
        } 
    }
}
