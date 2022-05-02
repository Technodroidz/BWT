<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\State;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listData = City::all();
        return view('admin.location.city_list',compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listData = State::all();
        return view('admin.location.city_create',compact('listData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = City::create($request->all());
        if ($save) {
            return redirect(route('admin.city.index'))->with('success','City added successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $listData = State::all();
        return view('admin.location.city_edit',compact(['city','listData']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $city->state_id = $request->state_id;
        $city->hindi_name = $request->hindi_name;
        $city->english_name = $request->english_name;
        $city->description = $request->description;
        $save = $city->save();
        if ($save) {
            return redirect(route('admin.city.index'))->with('success','City updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function delete($id='')
    {
        $cityRecord = City::find($id);
        if ($cityRecord->delete()) {
            return back()->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }
}
