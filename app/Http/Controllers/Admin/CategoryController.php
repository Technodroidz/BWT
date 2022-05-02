<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $listData = Category::when($request->name,function($q) use($request){
            $q->where('name','like','%'.$request->name.'%');
        })
        ->latest()->paginate(10)->appends($request->all());
        return view('admin.category.list',compact('listData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listData = Category::where('parent_id',1) 
                            ->with('childrenCategories')
                            ->get();
        return view('admin.category.create',compact('listData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $save = Category::create($data);
        if ($save) {
            return redirect(route('admin.category.index'))->with('success','Record save successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $listData = Category::where('parent_id',0)
                            ->with('childrenCategories')
                            ->where('id','<>',$category->id)
                            ->get();
        return view('admin.category.edit',compact('category','listData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if($request->file('thumbnail')){
            $file = $request->file('thumbnail');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            // $data['thumbnail'] =$input;
            $category->thumbnail =$input;
        }
        $category->position   = $request->position + 1;
        $category->name       = $request->name;
        $category->parent_id  = $request->parent_id; 
        $save = $category->save();
        if ($save) {
            return redirect(route('admin.category.index'))->with('success','Record updated successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete($id='')
    {
        $data = Category::find($id); 
        if ($data->delete()) {
            return redirect(route('admin.category.index'))->with('success','Record deleted successfully !');
        }else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }
    public function changeStatus(Request $request)
    {
       $find = Category::find($request['id']);
       if (!empty($find)) {
            $find->active = $request['status'];
            $find->save();
            return json_encode(['success'=>true]);
        }else{
           return json_encode(['success'=>false]); 
        } 
    }
}
