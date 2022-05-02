@extends('layouts.admin')
@section('title') Admin | Videos @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Videos</h4>

    </div>
  </div>
  <div class="col-sm-8"></div>
  <div class="col-sm-2">
    <a class="btn btn-primary btn-block" href="{{route('admin.videos.create')}}">Add Video</a>
  </div>
  <div class="right-content">

      <div class="dropdown main-header-message right-toggle">
          <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
          <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </a>
      </div>
    </div>

</div>
<!-- /breadcrumb -->

<!-- row -->

<!--Row-->
<div class="row row-sm">
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
    <div class="card">
      @include('admin.include.alert_msg')
      <div class="card-body">
        <div class="table-responsive userlist-table">
          <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
            <thead>
              <tr>
                <th class="wd-lg-20p"><span>Videos</span></th>

                <th class="wd-lg-20p"><span>video Name</span></th>
                {{-- <th class="wd-lg-20p"><span>Video Id</span></th> --}}
                <th class="wd-lg-20p"><span>Created</span></th>
                <th class="wd-lg-20p"><span>User</span></th>
                <th class="wd-lg-20p"><span>Channel</span></th>
                <th class="wd-lg-20p">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($videos as $video )
              <tr>
                  <td>
                    <img alt="avatar" data-toggle="modal" data-target="#video-{{$video->id}}"
                    class="rounded-circle avatar-md mr-2" src="{{asset('assets/img/play-icon.jpg')}}">
                  </td>
                  <td>{{ $video->name ?? '-' }}</td>
                  {{-- <td><a href="#"> -</a> --}}
                  </td>
                  <td>{{ changeDateFormat($video->created_at, 'M-d-Y') }}</td>
                  <td><a href="{{$video->user->channel->url??'#'}}">{{ $video->user->name ?? '-' }}</a></td>
                  <td><a href="{{$video->user->channel->url??'#'}}">{{ $video->user->channel->name ?? '-' }}</a></span>
                  </td>

                  <td>
                      <a href="{{ route('admin.videos.edit',$video->id)}}">
                          <i class="far fa-pencil"></i>
                      </a>
                      <a href="{{ url('/admin/videos/delete/'.$video->id) }}" onclick="return confirm('Are you sure to delete this item?')">
                          <i class="fas fa-trash text-danger"></i>
                      </a>

                  </td>
              </tr>
              <div class="modal fade" id="video-{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content ">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      @include('video',['src'=>$video->video_url, 'height'=>400, 'poster'=>$video->thumbnail_url])
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="m-2">
          {{$videos->links()}}
        </div>
      </div>
    </div>
  </div><!-- COL END -->
</div>
<!-- Sidebar-right-->
<div class="sidebar sidebar-right sidebar-animate">
  <div class="panel panel-primary card mb-0 box-shadow">
    <div class="tab-menu-heading border-0 p-3">
      <div class="card-title mb-0">Filter</div>
      <div class="card-options ml-auto">
        <a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
      </div>
    </div>
    <div class="panel-body tabs-menu-body latest-tasks border-0">

        <form class="form-horizontal" action="{{url('admin/videos')}}">
              <div class="form-group">
                <input type="text" name="name" value="{{request('name')}}" class="form-control" placeholder="Video Name">
              </div>
              {{-- <div class="form-group">
                <input type="text" name="video_id" value="{{request('video_id')}}" class="form-control" placeholder="Video Id">
              </div> --}}

              <div class="form-group">
                <input type="text" name="user" value="{{request('user')}}" class="form-control" placeholder="User">
              </div>
              <div class="form-group">
                <input type="text" name="channel" value="{{request('channel')}}" class="form-control" placeholder="Channel">
              </div>

              <div class="form-group mb-0 mt-3 justify-content-end">
                <div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href={{url('admin/videos')}} class="btn btn-secondary float-right">Reset</a>
                </div>
              </div>
            </form>
    </div>
  </div>
</div>
<!--/Sidebar-right-->
@endsection
