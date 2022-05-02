<?php

namespace App\Http\Controllers;

use App\Category;
use App\Videos;
use Illuminate\Http\Request;

class JudgeController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::where('name','Judge')->first();
        $categories = $category?$category->categories:collect([]);
        $video= Videos::where('prefrence','judge')->first();    
        return view('web.pages.judges',compact('video','categories'));
    }
}
