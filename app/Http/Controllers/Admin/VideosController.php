<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletes;



class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $videos = Videos::with('category')
        ->when($request->name,function($q) use($request){
            $q->where('name','like','%'.$request->name.'%');
        })->when($request->user,function($q) use($request){
            $q->whereHas('user',function($q) use($request){
                $q->where('name','like','%'.$request->user.'%');
            });
        })->when($request->channel,function($q) use($request){
            $q->whereHas('user.channel',function($q) use($request){
                $q->where('name','like','%'.$request->channel.'%');
            });
        })->latest()->paginate(10)->appends($request->all());
        return view('admin.video.list', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.video.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'video'=> 'required|mimes:mp4,m4v,mov,avi,wmv,flv,mpg,mpeg',    
            'remark' => 'required',
            'category_id' => 'required',
        ]);

        if($validator->fails()){

            $response['error'] =$validator->errors()->toArray();

            foreach($response['error'] as $error){

                $request->flash();
                return redirect(route('admin.videos.create'))->with('errormsg', implode('',$error));

            }
        }

        $new_video = new Videos();
        $new_video->user_id = 0;
        $new_video->name = $request->name;
        $new_video->remark = $request->remark;
        $new_video->status = 1;
        $new_video->category_id = $request->category_id;
        $new_video->prefrence = $request->prefernce;
        $new_video->type = 'performance';


        if($request->file('video')){

            $file = $request->file('video');
            $filename = $file->getClientOriginalName();
            $input = time().$file->getClientOriginalExtension();
            $path = public_path().'/uploads/video';
            $file->move($path, $filename);
            $new_video->video =$filename;

        }

        if($request->file('thumbnail')){

            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $input = time().$file->getClientOriginalExtension();
            $path = public_path().'/uploads/thumbnail';
            $file->move($path, $filename);
            $new_video->thumbnail =$filename;

        }


        // return $new_video;
        $new_video->save();

        return redirect(route('admin.videos'))->with('success','Video has been created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function show(Videos $videos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $video = Videos::findOrFail($id);
        $categories = Category::where('parent_id',0)->get();

        return view('admin.video.edit',compact('video','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'video'=> 'mimes:mp4,m4v,mov,avi,wmv,flv,mpg,mpeg',
            'remark' => 'required',
            'category_id' => 'required',

        ]);

        if($validator->fails()){

            $response['error'] =$validator->errors()->toArray();

            foreach($response['error'] as $error){

                $request->flash();
                return back()->with('errormsg', implode('',$error));

            }
        }

        $new_video =Videos::find($id);
        $new_video->name = $request->name;
        $new_video->remark = $request->remark;
        $new_video->category_id = $request->category_id;
        $new_video->prefrence = $request->prefernce;


        if($request->file('video')){

            $file = $request->file('video');
            $filename = $file->getClientOriginalName();
            $input = time().$file->getClientOriginalExtension();
            $path = public_path().'/uploads/video';
            $file->move($path, $filename);
            $new_video->video =$filename;
        }


        if($request->file('thumbnail')){

            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $input = time().$file->getClientOriginalExtension();
            $path = public_path().'/uploads/thumbnail';
            $file->move($path, $filename);
            $new_video->thumbnail =$filename;

        }

        $new_video->save();

        return redirect(route('admin.videos'))->with('success','Video has been updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Videos  $videos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(!$request->id){
            return redirect(route('admin.videos'))->with('errormsg','OPPS! There was an error, data not found!');
        }
        $page = Videos::find($request->id);

        if ($page->delete()) {
            return redirect(route('admin.videos'))->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }



    public function changeStatus(Request $request){

        $find = Videos::find($request['id']);
        if (!empty($find)) {
             $find->status = $request['status'];
             $find->save();
             return json_encode(['success'=>true]);
         }else{
            return json_encode(['success'=>false]);
         }
    }
}
