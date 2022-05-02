@extends('layouts.admin')
@section('title') Admin | CMS Pages @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="left-content">
        <div>
          <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome back!</h2>
          <p class="mg-b-0">BWT Admin Dashboard</p>
        </div>
    </div>
</div>

<!--Row-->
<div class="row row-sm">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
        <!-- row -->
<div class="row row-sm">
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-primary-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">TOTAL USERS</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{$total_user}}</h4>

                        </div>

                    </div>
                </div>
            </div>
            {{-- <span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span> --}}
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-danger-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">TOTAL VIDEOS</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{$total_video}}</h4>

                        </div>
                    </div>
                </div>
            </div>
            {{-- <span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span> --}}
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-success-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">TOTAL PRODUCTS</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">{{$total_product}}</h4>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span> --}}
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden sales-card bg-warning-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                <div class="">
                    <h6 class="mb-3 tx-12 text-white">REVIEW VIDEOS</h6>
                </div>
                <div class="pb-0 mt-0">
                    <div class="d-flex">
                        <div class="">
                            <h4 class="tx-20 font-weight-bold mb-1 text-white">10,005</h4>
                        </div>

                    </div>
                </div>
            </div>
            {{-- <span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span> --}}
        </div>
    </div>
</div>
<!-- row closed -->
    </div><!-- COL END -->
</div>

<!--Row-->
<div class="row row-sm">
        <div class="col-xl-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Total Videos</h4>
                    </div>
                </div>
                <div class="card-body">

                    <div id="bar" class="sales-bar mt-2"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-xl-4 col-md-12 col-lg-12">
            <div class="card" style="height: 450px; overflow-y: scroll">
                <div class="card-header pb-1">
                    <h3 class="card-title mb-2">Recent Buyers</h3>
                </div>
                <div class="card-body p-0 customers mt-1">
                    <div class="list-group list-lg-group list-group-flush">
                        @forelse ($recent_buyers as $order)
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle mr-3 my-auto" src="{{asset('bwt-admin/assets/img/faces/3.jpg')}}" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-0">
                                            <h5 class="mb-1 tx-15">{{@$order->user->name}}</h5>
                                            <p class="mb-0 tx-13 text-muted">
                                                {{$order->created_at->format('d, F Y')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-0">
                                            <h5 class="mb-1 tx-15">No Data</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 col-md-12 col-lg-12">
                <div class="card mg-b-20" style="height: 450px; overflow-y: scroll">
                <div class="card-body">

                    <div class="main-content-label mg-b-5">
                        User Statistics
                    </div>

                    <div class="total-revenue">
                        <div>
                          <h4>60%</h4>
                          <label><span class="bg-primary"></span>This Year</label>
                        </div>
                        <div>
                          <h4>40%</h4>
                          <label><span class="bg-danger"></span>Last Year</label>
                        </div>

                      </div>

                    <div class="morris-wrapper-demo mt-4 cht" id="morrisBar1"></div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-12 col-lg-12">

            <div class="card" style="height: 450px; overflow-y: scroll">
                <div class="card-header pb-1">
                    <h3 class="card-title mb-2">Top Users</h3>
                    <p>Weekly Top 3 Users</p>
                </div>
                <div class="card-body p-0 customers">
                    <div class="list-group list-lg-group list-group-flush" style="margin-top: -8px;">
                        @forelse ($top_users as $user)
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <img class="avatar-lg rounded-circle mr-3 my-auto"
                                src="{{$user->profile_url}}" alt="">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-0">
                                            <h5 class="mb-1 tx-15">{{$user->name}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="list-group-item list-group-item-action" href="#">
                            <div class="media mt-0">
                                <div class="media-body">
                                    <div class="d-flex align-items-center">
                                        <div class="mt-1">
                                            <h5 class="mb-1 tx-15">No Data</h5>
                                        </div>
                                        <span class="ml-auto wd-45p fs-16 mt-2">
                                            <div id="spark2" class="wd-100p"></div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-xl-12 col-md-12 col-lg-12">

<div class="card">
            <div class="card-header pb-1">
                    <h3 class="card-title mb-2">Trending Videos</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive userlist-table">
                        <table class="table card-table table-striped table-vcenter text-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="wd-lg-8p"><span>User</span></th>
                                    <th class="wd-lg-20p"><span></span></th>
                                    <th class="wd-lg-20p"><span>Likes</span></th>
                                    <th class="wd-lg-20p"><span>User</span></th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($trending_videos as $video)
                                <tr>
                                    <td>
                                        @include('video',['height'=>100,'poster'=>$video->thumbnail_url,'src'=>$video->video_url])
                                    </td>
                                    <td>{{$video->name}}</td>
                                    <td>
                                       {{$video->likes_count}}
                                    </td>
                                    <td>
                                        <a href="{{route('admin.user.show',$video->user_id)}}">{{@$video->user->name}}</a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4">no Data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
    <!-- Raphael js -->
        <script src="../assets/plugins/raphael/raphael.min.js"></script>
        <script src="../assets/plugins/morris.js/morris.min.js"></script>

        <!--Internal Chart Morris js -->
        <script src="../assets/js/chart.morris.js"></script>
