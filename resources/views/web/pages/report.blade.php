@extends('web.welcome')

@section('title','Report')

@section('content')

<div class="wrap-height<br/>
<div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    <form >
        <div class="card" id="card-new">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h2>Report</h2>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
                <form method="post" action="{{route('report.store')}}">
                    @csrf
                    <div class="row">
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
                        <div class="col-md-6 col-xs-12 form-group">
                            <label>Subject<sup style="color:#ff0000">*</sup></label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>
                        <div class="col-md-12 col-xs-12 form-group">
                            <label>Message<sup style="color:#ff0000">*</sup></label>
                            <textarea rows="3" name="message" class="form-control" placeholder="Type here..."></textarea>
                        </div>
                        <div class="col-md-12 col-xs-12 form-group">
                            <button type="submit" class="btn btn-success" style="width:100%;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
 </div>

@endsection