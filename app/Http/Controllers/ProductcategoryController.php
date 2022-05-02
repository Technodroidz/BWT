<?php

namespace App\Http\Controllers;

use App\Category;
use App\productcategory;
use Illuminate\Http\Request;

class ProductcategoryController extends Controller
{


    public function index(Request $request){
    
        $productcategorys= productcategory::when($request->name,function($q) use($request){
            $q->where('name','like','%'.$request->name.'%');
        })
        ->latest()->paginate(10)->appends($request->all());
        return view('admin.productcategory.list',compact('productcategorys'));
    }

    public function create(){
        $listData = productcategory::where('parent_id',0)
            ->with('childrenCategories')
            ->get();
        return view('admin.productcategory.create',compact('listData'));
    }

    public function store(Request $request){


        $request->validate([
            'name' => 'required',   
            'thumbnail'=>'required',
            'parent_id'=>'required',
            'position'=>'required',
        ]);

        $productcategorys = new productcategory;
        $productcategorys->name=$request->name;
        $productcategorys->parent_id=$request->parent_id;
        $productcategorys->position=$request->position;
        if($request->file('thumbnail')){

            $file = $request->file('thumbnail');
            $filename = $file->getClientOriginalName();
            $input = time().$file->getClientOriginalExtension();
            $path = public_path().'/uploads/thumbnail';
            $file->move($path, $filename);
            $productcategorys->thumbnail =$filename;
        }
        $productcategorys->save();
        return redirect(route('admin.product-category'))->with('success','add successfully');
        }


        public function edit($id){
            $listData = productcategory::where('parent_id',0)
            ->with('childrenCategories')
            ->where('id','<>',$id)
            ->get();
            $productcategorys= productcategory::find($id);
            return view('admin.productcategory.edit',compact('productcategorys','listData'));

        }


        public function update(Request $request,$id){


            $request->validate([
                'name' => 'required',
                'thumbnail'=>'nullable',
                'position'=>'required',
            ]);
    
            $productcategorys = productcategory::find($id);
            $productcategorys->name=$request->name;
            $productcategorys->parent_id=$request->parent_id;
            $productcategorys->position=$request->position;
            if($request->file('thumbnail')){
    
                $file = $request->file('thumbnail');
                $filename = $file->getClientOriginalName();
                $input = time().$file->getClientOriginalExtension();
                $path = public_path().'/uploads/thumbnail';
                $file->move($path, $filename);
                $productcategorys->thumbnail =$filename;
            }
            $productcategorys->save();
            return redirect(route('admin.product-category'))->with('success','update successfully');
        }



            public function destroy(Request $request){
                if(!$request->id){
                    return redirect(route('admin.product-category'))->with('errormsg','OPPS! There was an error, data not found!');
                }
                $page = productcategory::find($request->id);
        
                if ($page->delete()) {
                    return redirect(route('admin.product-category'))->with('success','Record deleted successfully !');
                }else{
                    return back()->with('errormsg','OPPS! There was an error!');
                }

            }

        public function changeStatus(Request $request)
        {
        $find = productcategory::find($request['id']);
        if (!empty($find)) {
                $find->status = $request['status'];
                $find->save();
                return json_encode(['success'=>true]);
            }else{
            return json_encode(['success'=>false]); 
            } 
        }

    }     

