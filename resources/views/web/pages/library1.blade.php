@extends('web.welcome')

@section('title','Library')

@section('content')

<div class="row ">
    <div class="col-xl-12">
        <ul id="tabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#amazontv" class="amazon active" role="tab"
                    data-toggle="tab"><img src="{{asset('assets/img/amazon-t.png')}}"></a></li>
            <li role="presentation"><a href="#appletv" role="tab" class="apple" data-toggle="tab"><img
                        src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
            </li>
            <li role="presentation"><a href="#googletv" role="tab" class="google" data-toggle="tab"><img
                        src="https://tv.google//static/images/logos/gtv.svg"> </a></li>
            <li role="presentation"><a href="#roku" role="tab" class="roku" data-toggle="tab"><img
                        src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"> </a></li>
        </ul>
    </div>
    <div class="col-md-12 text-right form-group">
        <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
    </div>
</div>


<div class="wrap-height top30">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-folders">

                <!-- Folders Container -->
                <div class="card-body" id="foldersGroup">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('library')}}">Library</a></li>
                        @if ($category->parent)
                        <li class="breadcrumb-item "><a href="{{route('show-detaill',$category->parent->slug)}}">{{$category->parent->name}}</a></li>                  
                        @endif
                        <li class="breadcrumb-item active">{{$category->name}}</li>
                    </ol>

                </div>
                <div class="row">
                    @foreach ($category->categories as $subcategory )
                        @if ($subcategory->categories->count())
                            <div class="card-body">
                                <div class="row" style="width: 100%">
                                    <div class="col-md-12">
                                        <h4>{{$subcategory->name}}</h4>
                                    </div>
                                </div>
                                <div class="row" style="width: 100%">
                                @foreach ($subcategory->categories as $subcat )
                                    <div class="col-md-2 col-sm-6 co-xs-6">
                                        <div class="card-vd">
                                            <a href="{{route('library-content',$subcat->slug)}}">
                                                <div class="boxx bx">
                                                    <img src="http://54.153.36.130/uploads/dance.jpg" class="img-responsive">
                                                    <div class="overlay">
                                                    </div>
                                                </div>
                                                <div class="cont">
                                                    <strong>{{$subcat->name}}</strong>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>                    
                        @else
                        <div class="col-md-2 col-sm-6 co-xs-6">
                            <div class="card-vd">
                                <a href="{{route('library-content',$subcategory->slug)}}">
                                    <div class="boxx bx">
                                        <img src="http://54.153.36.130/uploads/dance.jpg" class="img-responsive">
                                        <div class="overlay">
                                        </div>
                                    </div>
                                    <div class="cont">
                                        <strong>{{$subcategory->name}}</strong>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
