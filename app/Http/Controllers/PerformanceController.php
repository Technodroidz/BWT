<?php

namespace App\Http\Controllers;

use App\Audition;
use App\Category;
use App\Videos;
use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    public function index(Request $request)
    {
        $category = Category::where('name','Performances')->first();
        $categories = $category?$category->categories:collect([]);
        $video= Videos::where('prefrence','performance')->first();
        return view('web.pages.performance',compact('categories','video'));
    }

    public function more($slug)
    {
        $category = Category::where('slug',$slug)->firstOrFail();
        $videos = $category->videos->load('user');
        return view('web.pages.performmance-more',compact('videos','category'));
    }

    public function videoLike(Request $request)
    {
        $request->validate([
            'video_id'=>'required|exists:videos,id'
        ]);
        $like = auth()->user()->likes()->where(['video_id'=>$request->video_id])->first();
        if($like){
            $like->delete();
            return response()->json(['message'=>'Disliked successfully!','liked'=>0],200);
        }else{
            auth()->user()->likes()->create(['video_id'=>$request->video_id]);
            return response()->json(['message'=>'Liked successfully!','liked'=>1],200);
        }
    }

    public function videoView(Request $request)
    {
        auth()->user()->views()->create(['video_id'=>$request->video_id]);
        return response()->json(['message'=>'Viewed successfully!'],200);
    }

    public function videoComment(Request $request)
    {
        $request->validate([
            'comment'=>'required|string|max:200',
            'video'=>'required|numeric|exists:videos,id',
        ]);
        $video = Videos::find($request->video);
        $video->comments()->create([
            'user_id'=>auth()->Id(),
            'comment'=>$request->comment
        ]);

        return response()->json(['message'=>'comment successfully!']);
    }

    public function trailer(Request $request)
    {
        $category = Category::where('name','Trailers')->first();
        $categories = $category?$category->categories:collect([]);
        return view('web.pages.trailers',compact('categories'));
    }

    public function trailerMore($slug)
    {
        $category = Category::where('slug',$slug)->firstOrFail();
        $videos = $category->videos->load('user');
        return view('web.pages.trailers-more',compact('videos','category'));
    }

    public function buskingBoard(Request $request)
    {
        $category = Category::where('name','Busking Board')->first();
        $auditions = Audition::orderBy('score')->limit(10)->get();
        $categories = $category?$category->categories:collect([]);
        $videos = Videos::whereHas('user')->whereHas('likes')->withCount('likes')->limit(10)
            ->orderByRaw('likes_count desc')->get();
        return view('web.pages.busking-board',compact('categories','videos','auditions'));
    }

    public function  infomercial(Request $request)
    {
        $category = Category::where('name','Infomercials')->first();
        $categories = $category?$category->categories:collect([]);
        return view('web.pages.infomercials',compact('categories'));
    }

    public function infomercialMore($slug)
    {
        $category = Category::where('slug',$slug)->firstOrFail();
        $videos = $category->videos->load('user');
        return view('web.pages.infomercials-more',compact('videos','category'));
    }

    public function videoDelete(Request $request)
    {
        $request->validate(['video'=>'required|exists:videos,id']);
        Videos::where('id',$request->video)->delete();
        return response()->json(['message'=>'deleted successfully']);
    }
}
