@extends('web.welcome')

@section('title','Join Community Form')


@section('content')

<div class="wrap-height">
    <br/>
      <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    <form>
        <div class="card" id="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-xs-12 form-group">
                        <img class="img-responsive form-logo" src="http://bwt.tec24.in/public/assets/img/use/smalllogo.png" width="100%">
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Email <sup style="color:#ff0000;">*</sup></label>
                        <input type="email" name="" class="form-control" placeholder="you@example.com" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>First Name <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Last Name <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Address <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>City <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>State <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Zip <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Name five adjectives that describe who you are? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your greatest accomplishment today? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Describe your goal for the next two years? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Do you prefer to work independently or with others? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Why do you want to be part of this Focus group? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Have you ever stopped and watch Street performers? if so, where? and how often? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Where is "busking" origin? Have you heard about "Busking and Buskers" before now? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What's ypur favorite movie/TV show? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>How do you deal with the pressure of meeting deadlines? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Name three attributes you feel that a person should have to be on a team? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Your group may be given instructions to complete a specific task a certain way and time. However a member of the group finds a way for the task to be done quickly. How would you handle this issue? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>Name one or two things that may set you apart within your peer group from other invitees? <sup style="color:#ff0000;">*</sup></label>
                        <input type="text" name="" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group">
                        <button type="submit" class="btn btn-success" style="width:100%;">Subcribe, thank you</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="card" id="card">
        <div class="card-body text-center">
            <a href="#" class="like">Like</a>
            <a href="#" class="tweet">Tweet</a>
            <a href="#" class="pin">Pin</a>
            <a href="#" class="gplus">+1</a>
            <a href="#" class="insta">in</a>
        </div>
    </div>
 </div>

@endsection 