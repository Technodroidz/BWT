<?php

namespace App\Http\Controllers;

use App\Product;
use App\productcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function products()
    {
        $products = Product::where('status',1)->get();
        return view('web.pages.product',compact('products'));
    }

    public function index(){
        $products = Product::paginate(20);
        return view('product.index',compact('products'));
    }


    //--------create-----//

    public function create(){
        
        $listData = productcategory::where('parent_id',0)
            ->with('childrenCategories')
            ->get();
        return view('product.product',compact('listData'));
    }

    //------------store--------------//



    public function store(Request $request){

        $request->validate([
            'product_name'=>'required',
            'decription'=>'required',
            'image'=>'required',
            'price'=>'required',
        ]);

        $products = new Product;
        $products->product_name=$request->product_name;
        $products->decription=$request->decription;
        $products->category_id=$request->category_id;
        $products->image=$request->image;
        $products->price=$request->price;
        $products->discount=$request->discount;
        $products->seller_id=auth()->Id();

        if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $products->image =$input;
        }
        $products->save();
        return redirect()->route('product.index')->with('success','Product has been added successfully!');

    }

     //------------------edit------------//
     
     public function edit($id){
         $product = Product::findOrFail($id);
         $listData = productcategory::where('parent_id',0)
            ->with('childrenCategories')
            ->get();
         return view('product.product', compact('product','listData'));              

     }

     //-------------------update------------//


     public function update( Request $request,$id)
    {
       $request->validate([  
           'product_name'=>'required',  
           'decription'=>'required',  
           'image'=>'nullable',
           'price'=>'required',  
       ]);
       $products = Product::find($id);    
       $products->product_name=$request->product_name;
       $products->decription=$request->decription;
       $products->category_id=$request->category_id;
       $products->price=$request->price;
       $products->discount=$request->discount;
       $products->seller_id=auth()->Id();
       if($request->file('image')){
            $file = $request->file('image');
            $input = time().'.'.$file->getClientOriginalExtension();
            $path = public_path().'/uploads';
            $file->move($path, $input);
            $products->image =$input;
        }
        
        $products->save();

       return redirect(route('product.index'))->with('success','Member has been updated successfully!');

   }


   //----------delete-------------------//  


    public function destroy(Request $request)
    {
        if($request->id){
            $page = Product::find($request->id);
        if ($page->delete()){
            return redirect(route('product.index'))->with('success','Record deleted successfully !');
        }
        }

       else{
            return back()->with('errormsg','OPPS! There was an error!');
        }
    }

    public function p_activation($id,$st){

        $product= Product::where('id',$id)->update(['status'=>$st]);
        return redirect('admin/products/list')->with('success','Member has been updated successfully!');


        
        
    }


      public function decription($slug){
          $product= Product::where('product_slug',$slug)->first();
        return view('web.pages.product-description',compact('product'));
      }



      public function productListInAdmin(){
        $products = Product::paginate(20);
        return view('admin.product.index',compact('products'));
    }





}

