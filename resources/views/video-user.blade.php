<div class="img_s">
    @include('video',['poster'=>$video->thumbnail_url,
    'src'=>$video->video_url])
 </div>
 <div class="video_d">
    <div class="row">
       <div class="col-md-3">
          <a href="{{$video->user->channel->url}}">
            <img class="profile_i" title="{{$video->user->channel->name}}" src="{{$video->user->profile_url}}">
          </a>
       </div>
       <div class="col-md-9">          
          <p class="p_desc"><span>{{$video->likes_count}}</span> <i class="fa fa-thumbs-o-up {{$likes->contains($video->id)?'active':''}}" onclick="vide_like(this,{{$video->id}})" aria-hidden="true"></i> • {{$video->created_at->diffForHumans()}}</p>
       </div>
    </div>
 </div>