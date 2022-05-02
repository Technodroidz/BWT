<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Teacher;
use App\Language;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\SaveTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listData = Teacher::with('language:id,name')->orderBy('id','DESC')->get();
        return view('admin.teacher.list',compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listData = Language::all();
        $category = Category::all();
        return view('admin.teacher.create',compact('listData','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveTeacherRequest $request)
    {
        if ($request->hasFile('thumbnail')) {
            $thumbnail            = $request->thumbnail;
            $image                = $request->file('thumbnail');
            $newimg               = rand() . '_' . time() . '_' . $image->getClientOriginalname();
            $storeImage           = $request->file('thumbnail')->storeAs('public/teacher',$newimg);
            $data['thumbnail'] = $newimg;
        }
        $data['name']         = $request->name;
        $data['email']        = $request->email;
        $data['mobile']       = $request->mobile;
        $data['full_address'] = $request->full_address;
        // $data['language_id']  = $request->language_id; 
        $save = Teacher::create($data);
        if ($save) {
            $save->categories()->attach($request->category_id);
            $save->languages()->attach($request->language_id);
            return redirect(route('admin.teacher.index'))->with('success','Record save successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
       // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $listData = Language::all(); 
        $category = Category::all();
        return view('admin.teacher.edit',compact('teacher','listData','category')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {   
        if ($request->hasFile('thumbnail')) {
            // $teacherImg = explode(url('/'), $teacher->thumbnail);
            // unlink($teacherImg[1]); 
            $thumbnail          = $request->thumbnail;
            $image              = $request->file('thumbnail');
            $newimg             = rand() . '_' . time() . '_' . $image->getClientOriginalname();
            $storeImage         = $request->file('thumbnail')->storeAs('public/teacher',$newimg); 
            $teacher->thumbnail= $newimg;
        } 
        $teacher->name         = $request->name;
        $teacher->email        = $request->email; 
        $teacher->mobile       = $request->mobile; 
        $teacher->full_address = $request->full_address; 
        // $teacher->language_id  = $request->language_id; 
        $teacher->categories()->detach();
        $teacher->languages()->detach(); 
        if ($teacher->save()) {
            $teacher->categories()->attach($request->category_id);
            $teacher->languages()->attach($request->language_id);
            return redirect(route('admin.teacher.index'))->with('success','Record updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function delete($id='')
    {
        $teacher = Teacher::find($id); 
        if ($teacher->delete()) {
            return redirect(route('admin.teacher.index'))->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }
    public function changeStatus(Request $request)
    {
       $teacher = Teacher::find($request['id']);
       if (!empty($teacher)) {
            $teacher->status = $request['status'];
            $teacher->save();
            return json_encode(['success'=>true]);
        }else{
           return json_encode(['success'=>false]); 
        } 
    }
}
