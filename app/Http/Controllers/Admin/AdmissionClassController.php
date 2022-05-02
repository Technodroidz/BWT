<?php

namespace App\Http\Controllers\Admin;

use App\AdmissionClass;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listData = AdmissionClass::all();
        return view('admin.course.course_list',compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.course_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = AdmissionClass::create($request->all());
        if ($save) {
            return redirect(route('admin.course.index'))->with('success','Record added successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdmissionClass  $admissionClass
     * @return \Illuminate\Http\Response
     */
    public function show(AdmissionClass $admissionClass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdmissionClass  $admissionClass
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmissionClass $admissionClass,$id ='')
    {
        $admissionClass = AdmissionClass::find($id); 
        return view('admin.course.course_edit',compact('admissionClass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdmissionClass  $admissionClass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmissionClass $admissionClass,$id='')
    {
        $admissionClass = AdmissionClass::find($id);
        $admissionClass->hindi_name = $request->hindi_name;
        $admissionClass->english_name = $request->english_name;
        $admissionClass->description = $request->description;
        $save = $admissionClass->save();
        if ($save) {
            return redirect(route('admin.course.index'))->with('success','Record updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdmissionClass  $admissionClass
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmissionClass $admissionClass)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdmissionClass  $admissionClass
     * @return \Illuminate\Http\Response
     */
    public function delete($id='')
    {
        $admissionClass = AdmissionClass::find($id); 
        if ($admissionClass->delete()) {
            return back()->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }
}
