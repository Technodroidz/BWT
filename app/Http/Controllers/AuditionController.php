<?php

namespace App\Http\Controllers;

use App\Audition;
use App\Category;
use App\Videos;
use App\usercategory;
use App\Channel;
use App\WebUser;

use Illuminate\Http\Request;

class AuditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auditions = Audition::join('web_users', 'auditions.user_id', '=', 'web_users.id')
        ->leftjoin('usercategories', 'usercategories.id', '=', 'web_users.category_id')
        ->select('auditions.*','web_users.category_id','web_users.status','usercategories.name as sub_category_name','usercategories.parent_id')
        ->orderBy('auditions.id','desc')->paginate(20);

        foreach($auditions as $k=>$v){
            $auditions[$k]['category_name'] = usercategory::where('id',$v->parent_id)->value('name');
        }
        // dd($auditions);die;
        // return $auditions;

        return view('admin.audition.index',compact('auditions'));
    }

    public function studio(Request $request){
        $channels = Channel::join('web_users', 'channel.user_id', '=', 'web_users.id')
        ->select('channel.*','web_users.name as username','web_users.user_type')
        ->orderBy('channel.id','desc')->paginate(20);
       // print_r($channels);die;
        return view('admin.audition.studio',compact('channels'));
    }

    public function show(Audition $audition ,$id)
    {
          $audition = Audition::findOrFail($id);
        return view('admin.audition.show',compact('audition'));
    }

    public function update(Request $request,Audition $audition)
    {
        $audition->score = $request->score;
        $audition->position = $request->position;
        $audition->save();
        return back()->withSuccess('Audition updated successfully!');
    }


    public function web_audition()
    {
        // $auditions = Audition::orderBy('id','desc')->paginate(20);

        // $data = [];

        $videos = Videos::whereHas('user')->whereHas('likes')->withCount('likes')->limit(10)
        ->orderByRaw('likes_count desc')->get();

        foreach($videos  as $k=>$v){
            $videos[$k]['scoreByJudge'] = Audition::where('user_id',$v->user_id)->value('score') ?? 0;
            $videos[$k]['userName'] = Audition::where('user_id',$v->user_id)->value('name') ?? 'N/A';
            $videos[$k]['total_score'] = $videos[$k]['scoreByJudge'] + $v->likes_count;
        }


    

        // return $videos ;


        return view('web.pages.auditions',compact('videos'));
    }

    public function destroy($uid)
    {
        Audition::where('user_id',base64_decode($uid))->delete();
        // sponsor::where('user_id',base64_decode($uid))->delete();
    
        return redirect('admin/audition?u=4');
    
    }

    public function deleteStudio($uid){
         $channel_id = base64_decode($uid);
         $channel_user = Channel::where('id', $channel_id)->first();
         $channel_user_id = $channel_user->user_id;
         //print_r($channel_user_id);die;
         WebUser::where('id',$channel_user_id)->delete();
         Channel::where('id',$channel_id)->delete();
          return back()->withSuccess('Studio deleted successfully!');
       // return redirect('admin/studio?u=4');
    }

}
