@extends('web.welcome')
@section('title','Contact')

@section('content')

<div class="wrap-height"><br>
    <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <!--<div class="card" id="card-new">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-xs-12 form-group">
                        <p class="mar_0">B 68, street no. 4, Pradeep vihar, Burari Nathupura Delhi 110084</p>
                    </div>
                    <div class="col-md-4 col-xs-12 form-group">
                        <p class="mar_0"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +91 7856 785 956</p>
                        <p class="mar_0"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:example@gmail.com" target="_blank">example@gmail.com</a></p>
                    </div>
                    <div class="col-md-4 col-xs-12 form-group">
                        <i class="fa fa-map-marker" aria-hidden="true" id="map_marker"></i>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="card" id="card-new">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7 col-xs-12 form-group">
                        <div class="row">
                            <div class="col-md-6 col-xs-12 form-group">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-md-6 col-xs-12 form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="name" class="form-control">
                            </div>
                            <div class="col-md-12 col-xs-12 form-group">
                                <label>Subject</label>
                                <textarea rows="12"  name="subject"  id="email" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 col-xs-12 form-group">
                                <button type="submit" class="btn btn-success" style="width:100%;">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12 form-group">
                        <div class="mapouter">
                            <p style="
    text-align: left;
    margin-bottom: 5px;">Email : info@bwtstudio.com</p>
                            <div class="gmap_canvas">
                                <iframe width="100%" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=B%2068,%20pradeep%20vihar%20delhi%20110084&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                    
                                </iframe>
                                <a href="https://yt2.org"></a>
                                <br>
                                <style>
                                .mapouter{position:relative;text-align:right;height:420px;width:100%;}
                                </style>
                                <style>
                                .gmap_canvas {overflow:hidden;background:none!important;height:420px;width:100%;}
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
 </div>

@endsection