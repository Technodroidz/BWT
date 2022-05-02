<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\usercategory;
use App\Videos;
use Illuminate\Http\Request;

class UsercategoryController extends Controller

{
    public function index(Request $request)
    {
        $listData = usercategory::when($request->name,function($q) use($request){
            $q->where('name','like','%'.$request->name.'%');
        })
        ->latest()->paginate(500)->appends($request->all());
        return view('admin.usercategory.list',compact('listData'));
    }


    public function create()
    {
        $listData = userCategory::where('parent_id',1)
                            ->with('childrenCategories')
                            ->get();
        return view('admin.usercategory.create',compact('listData'));
    }


    public function store(Request $request)
    {
        $data['thumbnail']= 'default.png';
        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $data['thumbnail'] =$input;
        }
        $data['position']  = $request->position + 1;
        $data['name']      = $request->name;
        $data['slug']      = $request->slug;
        $data['parent_id'] = $request->parent_id;
        $save = userCategory::create($data);
        if ($save) {
            return redirect(route('admin.usercategory.index'))->with('success','Record save successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }


    public function edit(userCategory $usercategory)

    {
        $listData = userCategory::where('parent_id',0)
                            ->with('childrenCategories')
                            ->where('id','<>',$usercategory->id)
                            ->get();
        return view('admin.usercategory.edit',compact('usercategory','listData'));
    }



    public function update(Request $request, usercategory  $usercategory )
    {
        $usercategory->position   = $request->position + 1;
        $usercategory->name       = $request->name;
        $usercategory->parent_id  = $request->parent_id;
        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            // $data['thumbnail'] =$input;
            $usercategory->thumbnail =$input;
        }

        $save = $usercategory->save();
        if ($save) {
            return redirect(route('admin.usercategory.index'))->with('success','Record updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }


    public function delete($id='')
    {
        $data = usercategory::find($id);
        if ($data->delete()) {
            return redirect(route('admin.usercategory.index'))->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    public function changeStatus(Request $request)
    {
       $find = usercategory::find($request['id']);
       if (!empty($find)) {
            $find->active = $request['status'];
            $find->save();
            return json_encode(['success'=>true]);
        }else{
           return json_encode(['success'=>false]);
        }
    }



    public function library(){
            $categories = usercategory::where('parent_id',0)->get();
            return view('web.pages.library',compact('categories'));
        }




        public function showlibrary($slug){
            $category= usercategory::where('slug',$slug)->firstOrFail();
          return view('web.pages.library1',compact('category'));
        }

        public function showlibraryVideo($slug){
            $category= usercategory::where('slug',$slug)->firstOrFail();
            $videos = Videos::whereHas('user',function($q) use($category){
                $q->where('category_id',$category->id);
            })->withCount('likes')->paginate(15);
            return view('web.pages.library2',compact('videos','category'));
        }


}
