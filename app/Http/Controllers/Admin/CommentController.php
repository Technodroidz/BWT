<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Comment;
use App\Http\Controllers\Controller;
use App\Pages;
use App\Videos;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index(){
        $category = Category::where('name','Home')->first();
        $categories = $category?$category->categories:collect([]);
        $video= Videos::where('prefrence','home')->first();       
        return view('web.index',compact('video','categories'));

    }


    public function storeComment(Request $request){
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'video'=> 'required|mimes:mp4,m4v,mov,avi,wmv,flv,mpg,mpeg',
            'remark' => 'required',
            'category_id' => 'required',
        ]);
    }

}
