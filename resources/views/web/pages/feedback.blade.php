@extends('web.welcome')

@section('title','Feedback')

@section('content')

<div class="wrap-height"><br>
    <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    <form  method="post" action="{{route('feedback.store')}}">
        @csrf
        <div class="card" id="card-new">
            <div class="card-body">
                <div class="row">
                    <!--<div class="col-md-12 col-xs-12 form-group">-->
                    <!--    <img class="img-responsive form-logo" src="http://bwt.tec24.in/public/assets/img/use/smalllogo.png" width="100%">-->
                    <!--</div>-->
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>First Name<sup style="color:#ff0000">*</sup></label>
                        <input type="text" name="first_name" class="form-control" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Last Name<sup style="color:#ff0000">*</sup></label>
                        <input type="text" name="last_name" class="form-control" required>
                    </div>
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Email<sup style="color:#ff0000">*</sup></label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                 
                    <!--<div class="col-md-6 col-xs-12 form-group">
                        <label>Phone Number<sup style="color:#ff0000">*</sup></label>
                        <input type="text" name="phone_no" class="form-control" required>
                    </div>-->
                    <div class="col-md-6 col-xs-12 form-group">
                        <label>Subject<sup style="color:#ff0000">*</sup></label>
                        <textarea rows="1"  name="subject" class="form-control" placeholder="Type here..."></textarea>                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Feedback<sup style="color:#ff0000">*</sup></label>
                        <textarea rows="3"  name="message" class="form-control" placeholder="Type here..."></textarea>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <button type="submit" class="btn btn-success" style="width:100%;">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
 </div>

@endsection