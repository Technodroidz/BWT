<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Subscriber;
use Auth;
use App\usercategory;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::guard('web_user')->user();
        $categories = usercategory::where('parent_id',0)->get();
        return view('web.subscriber.index',compact('user','categories'));
        // $data =[];
        // return view('web.subscriber.index', compact('data'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data =[];
      //  return view('admin.subscribers.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $isExist = Subscriber::where('email',$request->email)->count();
        if($isExist > 0){
            return Redirect::back()->withErrors(['msg' => 'You have already subscribed!']);

        }
        $data = [
                  "email"=>$request->email,
                  "f_name"=>$request->f_name,
                  "m_name"=>$request->m_name,
                  "l_name"=>$request->l_name,
                  "country"=>$request->country,
                  "state"=>$request->state,
                  "city"=>$request->city,
                  "address"=>$request->address,
                  "zip"=>$request->zip,
                  "phone"=>$request->phone,
                   ];

                $data = Subscriber::create($data);
                return Redirect::back()->withErrors(['msg' => 'Thank you for subscribe our platform!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =[];
        return view('backend.admin.passes.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function list()
    {
        $data = Subscriber::paginate(10);
        return view('admin.subscribers.index', compact('data'));
    }
}
