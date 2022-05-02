@extends('layouts.admin')
@section('title') Admin | User @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<div class="row row-sm">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
        <div class="card">

            <div class="card-body">
                <div class="row row-sm">
    <div class="col-lg-4">
        <div class="card mg-b-20">
            <div class="card-body">
                <div class="pl-0">
                    <div class="main-profile-overview">
                        <div class="main-img-user profile-user">
                            <img alt="" src="{{$user->profile_url}}">
                        </div>
                        <div class="d-flex justify-content-between mg-b-10">
                            <div>
                                <h5 class="main-profile-name">  {{$user->name}}</h5>

                            </div>
                        </div>

                        {{-- <div class="main-profile-bio">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.
                        </div> --}}
                        <!-- main-profile-bio -->
                        <div class="product-timeline pt-2 mt-1">
                <ul class="timeline-1 mb-0">
                    <li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Weekly Busker's Performance Comptetion </span>
                        <p class="mb-0 text-muted tx-12">Applied To</p>
                    </li>
                    <li class="mt-0"> <i class="ti-pie-chart bg-danger-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Dancing</span>
                        <p class="mb-0 text-muted tx-12">Performace Type</p>
                    </li>
                    <!-- <li class="mt-0"> <i class="ti-pie-chart bg-success-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Group</span>
                        <p class="mb-0 text-muted tx-12">Act Type</p>
                    </li> -->
                    <li class="mt-0"> <i class="ti-pie-chart bg-warning-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Dancers</span>
                        <p class="mb-0 text-muted tx-12">Group Name</p>
                    </li>
                    <li class="mt-0"> <i class="ti-pie-chart bg-purple-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">15</span>
                        <p class="mb-0 text-muted tx-12">Act Members</p>
                    </li>
                    <li class="mt-0 mb-0"> <i class="ti-pie-chart icons bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">2.4-producer Review - Yes</span>
                        <p class="mb-0 text-muted tx-12">Weekly Stage</p>
                    </li>
                </ul>
            </div>

                    </div><!-- main-profile-overview -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row row-sm">
            <div class="col-sm-12 col-xl-6 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="counter-status d-flex md-mb-0">
                            <div class="counter-icon bg-primary-transparent">
                                <i class="icon-layers text-primary"></i>
                            </div>
                            <div class="ml-auto">
                                <h5 class="tx-13">Followers</h5>
                                <h2 class="mb-0 tx-22 mb-1 mt-1">{{$user->channel?$user->channel->followers()->count():0}}</h2>
                                {{-- <p class="text-muted mb-0 tx-11">
                                    <i class="si si-arrow-up-circle text-success mr-1"></i>
                                    increase</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="counter-status d-flex md-mb-0">
                            <div class="counter-icon bg-danger-transparent">
                                <i class="icon-paypal text-danger"></i>
                            </div>
                            <div class="ml-auto">
                                <h5 class="tx-13">Videos</h5>
                                <h2 class="mb-0 tx-22 mb-1 mt-1">{{$user->videos()->count()}}</h2>
                                {{-- <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="counter-status d-flex md-mb-0">
                            <div class="counter-icon bg-success-transparent">
                                <i class="icon-rocket text-success"></i>
                            </div>
                            <div class="ml-auto">
                                <h5 class="tx-13">Posts</h5>
                                <h2 class="mb-0 tx-22 mb-1 mt-1">1,890</h2>
                                <p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="card">
            <div class="card-body">
                <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                        <!-- <li class="active">
                            <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"></span> <span class="hidden-xs">Applicant Administration</span> </a>
                        </li> -->
                        <li class="active">
                            <a href="#profile" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"></span> <span class="hidden-xs">Information</span> </a>
                        </li>
                        <li class="">
                            <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"></span> <span class="hidden-xs">About busking</span> </a>
                        </li>
                        <li class="">
                            <a href="#media" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"></span> <span class="hidden-xs">Media Upload</span> </a>
                        </li>
                        <li class="">
                            <a href="#paper" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"></span> <span class="hidden-xs">Paper Work</span> </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                    <div class="tab-pane" id="home">
                        <div class="card card-dashboard-eight pb-2">

            <div class="list-group">
                <div class="list-group-item border-top-0">
                    <p>Date Finalized</p><span>12/23/2020</span>
                </div>
                <div class="list-group-item">
                    <p>Assigned To</p><span></span>
                </div>
                <div class="list-group-item">
                    <p>State Comptetion State</p><span>Florida</span>
                </div>
                <div class="list-group-item">
                    <p>Email</p><span>{{$user->email}}</span>
                </div>

            </div>
        </div>
<!-- 
        <div class="tags">
<span class="tag tag-blue">Under 18</span>
<span class="tag tag-azure">Weekly Busker Winner</span>
<span class="tag tag-indigo">TV Spot Guranted</span>
<span class="tag tag-purple">Wild Card</span>
<span class="tag tag-pink">State Winner</span>
<span class="tag tag-red">National Winner</span>
<span class="tag tag-orange">Musicians</span>
<span class="tag tag-yellow">Theatrics</span>
<span class="tag tag-lime">Singers</span>
<span class="tag tag-green">Free Style</span>
</div> -->
                    </div>
                   <!-- <div class="tab-pane" id="profile">
                        <div class="card card-dashboard-eight pb-2">

            <div class="list-group">
                <div class="list-group-item border-top-0">
                    <p>Registered As</p><span>Artist</span>
                </div>
                <div class="list-group-item">
                    <p>Name</p><span>{{optional($user->audition)->name??'-'}}</span>
                </div>
                <div class="list-group-item">
                    <p>Age</p><span>{{optional($user->audition)->age??'-'}}</span>
                </div>
                <div class="list-group-item">
                    <p>Street Address</p><span>{{optional($user->audition)->StreetAddress??'-'}}</span>
                </div>
                <div class="list-group-item">
                    <p>Town/City</p><span>{{optional($user->audition)->TownCity??'-'}}</span>
                </div>
                <div class="list-group-item">
                    <p>State</p><span>{{optional($user->audition)->StreetAddress??'-'}}</span>
                </div>
                <div class="list-group-item">
                    <p>Zip Code</p><span>{{optional($user->audition)->ZipCode??'-'}}</span>
                </div>
                <div class="list-group-item">
                    <p>Country</p><span>United kingdom</span>
                </div>

                <div class="list-group-item">
                    <p>Email</p><span>{{$user->email}}</span>
                </div>
                <div class="list-group-item">
                    <p>Cell Phone</p><span>{{$user->mobile}}</span>
                </div>
                <div class="list-group-item">
                    <p>Home Phone</p><span>{{$user->mobile}}</span>
                </div>

            </div>
        </div>
                    </div> -->

                    <div class="tab-pane active" id="profile">
                        <div class="card card-dashboard-eight pb-2">

            <div class="list-group">
                <!-- <div class="list-group-item border-top-0">
                    <p>Registered As</p><span>Artist</span>
                </div>
                <div class="list-group-item">
                    <p>Category</p><span>Dancing</span>
                </div> -->
                <div class="list-group-item">
                    <p>Name</p><span>{{$user->name}}</span>
                </div>
                <div class="list-group-item">
                    <p>Cell Phone</p><span>{{$user->mobile}}</span>
                </div>
                <div class="list-group-item">
                    <p>Home Phone</p><span>{{$user->mobile}}</span>
                </div>
                <!-- <div class="list-group-item">
                    <p>Date of Birth
</p><span>23-June-1992</span>
                </div> -->
                <!-- <div class="list-group-item">
                    <p>Street
</p><span>23</span>
                </div> -->
                <div class="list-group-item">
                    <p>Town/City</p><span>{{optional($user->audition)->TownCity??'-'}}</span>
                </div>
                <div class="list-group-item">
                    <p>State</p><span>{{optional($user->audition)->StreetAddress??'-'}}</span>
                </div>
                <div class="list-group-item">
                    <p>Zip Code</p><span>{{optional($user->audition)->ZipCode??'-'}}</span>
                </div>

                <div class="list-group-item">
                    <p>Email</p><span>{{$user->email}}</span>
                </div>
                <!-- <div class="list-group-item">
                    <p>Password</p><span>password#234</span>
                </div> -->
                <!-- <div class="list-group-item">
                    <p>Channel Name</p><span>ChannelDancing</span>
                </div> -->


            </div>
        </div>
                    </div>

                    <div class="tab-pane" id="settings">
                        <div class="product-timeline pt-2 mt-1">
                <ul class="timeline-1 mb-0">
                    <li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Do you perform solo or as part of a group? </span>
                        <?php 
                           if(!empty($audition)){
                             if($audition->cmbActType == 1){
                                $performance = "Solo";
                             }elseif($audition->cmbActType == 1){
                                $performance = "Group";
                             }else{
                                $performance = '';
                             }
                           }else{
                              $performance = '';
                           }
                        ?>
                        <p class="mb-0 text-muted tx-12">{{$performance}}</p>
                    </li>
                    <li class="mt-0"> <i class="ti-pie-chart bg-danger-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">How many group members?</span>
                        <?php
                          if(!empty($audition->cmbActMembers)){
                            $count = $audition->cmbActMembers;
                          }else{
                            $count = 0;
                          }
                        ?>
                        <p class="mb-0 text-muted tx-12">{{$count}}</p>
                    </li>
                    <li class="mt-0"> <i class="ti-pie-chart bg-success-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">What is the Group's name?</span>
                        <p class="mb-0 text-muted tx-12">{{$audition->txtProPerformerName}}</p>
                    </li>
                    <li class="mt-0"> <i class="ti-pie-chart bg-warning-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">How many hours do you perform per month?</span>
                        <p class="mb-0 text-muted tx-12">{{$audition->cmbHoursPerMonth}}</p>
                    </li>
                    <li class="mt-0"> <i class="ti-pie-chart bg-purple-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">What is your type of performance?</span>
                        <p class="mb-0 text-muted tx-12">{{$audition->cmbPerformanceType}}</p>
                    </li>
                    <li class="mt-0"> <i class="ti-pie-chart icons bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">How many Years have you been busking?</span>
                        <p class="mb-0 text-muted tx-12">{{$audition->cmbBuskingLength}}</p>
                    </li><li class="mt-0"> <i class="ti-pie-chart bg-success-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Where is your main location of busking?</span>
                        <p class="mb-0 text-muted tx-12">{{$audition->txtProPerformerName}}</p>
                    </li>
                    <li class="mt-0"> <i class="ti-pie-chart bg-danger-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Do you perform at Public or Private Events?</span>
                        <p class="mb-0 text-muted tx-12">{{$audition->cmbPrivateEvents}}</p>
                    </li>
                </ul>
            </div>
                    </div>

                    <div class="tab-pane" id="media">

                        <div class="row">

                        <div class="col-md-6 col-lg-6 col-xl-6  col-sm-6">
                <div class="card">
                    <div class="card-body h-100">
                        <div class="pro-img-box">

                            <img class="w-100" src="{{optional($user->audition)->image_url??'-'}}" alt="product-image">

                        </div>
                        <div class="text-center pt-3">
                            <h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">Recent headshot photo of yourself</h3>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6  col-sm-6">
                <div class="card">
                    <div class="card-body h-100">
                        <div class="pro-img-box">
                            @include('video',['height'=>200,'poster'=>optional($user->audition)->image_url,'src'=>optional($user->audition)->video_url])

                        </div>
                        <div class="text-center pt-3">
                            <h3 class="h6 mb-2 mt-4 font-weight-bold text-uppercase">Video of your<br> performance</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
                    </div>


                    <div class="tab-pane" id="paper">

                        <div class="card card-dashboard-eight pb-2">

            <div class="list-group">
                <div class="list-group-item border-top-0">
                    <p>Terms & Conditions</p><span><button class="btn btn-primary btn-block">Download</button></span>
                </div>
                <div class="list-group-item">
                    <p>Video and Consent Release Form</p><span><button class="btn btn-danger btn-block">Download</button></span>
                </div>

            </div>
        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div><!-- COL END -->
</div>






@endsection
