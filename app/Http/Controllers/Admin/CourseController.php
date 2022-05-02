<?php

namespace App\Http\Controllers\Admin;

use App\AdmissionClass;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(AdmissionClass $admissionClass)
    {
        //
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
        $save = $admissionClass->update();
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
}
