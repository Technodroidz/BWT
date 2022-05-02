<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listData = State::all();
        return view('admin.location.state_list',compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.state_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $save = State::create($request->all());
        if ($save) {
            return redirect(route('admin.state.index'))->with('success','State added successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        return view('admin.location.state_edit',compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        $state->hindi_name = $request->hindi_name;
        $state->english_name = $request->english_name;
        $state->description = $request->description;
        $save = $state->save();
        if ($save) {
            return redirect(route('admin.state.index'))->with('success','State updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function delete($id='')
    {
        $state = State::find($id); 
        if ($state->delete()) {
            return redirect(route('admin.state.index'))->with('success','State deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }
}
