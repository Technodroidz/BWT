@extends('web.welcome')

@section('title','Bwt Community')

@section('content')

<div class="wrap-height"><br/>
    <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    <div class="row">
      <div class="col-md-6 col-xs-12 form-group">
        <img class="img-responsive" id="welcome_icon" src="http://54.153.36.130/assets/img/undraw_welcome_3gvl.svg">
      </div>
      <div class="col-md-6 col-xs-12 form-group">
        <h2 class="text-left">WELCOME!</h2>
        <p>
        	There are plenty of opportunities with BWT.  If you are interested in supporting our talented performers  join us and become part of our community.
        </p>
        <a href="{{ route('subscriber.index') }}" class="btn btn-success">Click here</a>
      </div>
    </div>
    <br><br>
    <hr>
    <div class="row">
    	<div class="col-md-12 col-xs-12 form-group">
    		<div class="ban_sponsor">
    			<div class="ban_div text-center">
    				<h2>SPONSORS AND ADVERTISERS</h2>    				
        			<a href="{{ url('sponsor/signup')}}" class="btn btn-success">Sign up</a>
    			</div>
    		</div>
    	</div>
    </div>
    <br><br>
    <hr>
    <div class="row">
    	<div class="col-md-12 col-xs-12 form-group">
    		<h2>JOINING BUSKING WITH TALENT'S COMMUNITY CIRCLE</h2>
    	</div>
    	<div class="col-md-6 col-xs-12 form-group">
    		<img class="img-responsive" src="http://54.153.36.130/assets/img/rs=w_600,h_300,cg_true,m.webp">
    	</div>
    	<div class="col-md-6 col-xs-12 form-group text-center">
    		<div class="c_content">
	    		<h2>Become a State's Contestant Judge</h2>
	    		<a href="{{ url('judges/signup') }}" class="btn btn-success">Apply Here</a>
	    	</div>
    	</div>

    	<div class="col-md-6 col-xs-12 form-group text-center">
    		<div class="c_content">
	    		<h2>BWT's Focus Groups</h2>
	    		<p class="text-center">Find out how you can become a member of a focus group.</p>
	    		<a href="{{ url('focus/signup') }}" class="btn btn-success">Apply here</a>
	    	</div>
    	</div>
    	<div class="col-md-6 col-xs-12 form-group">
    		<img class="img-responsive" src="http://54.153.36.130/assets/img/cr=w_600,h_300.webp">
    	</div>
    </div>
    <br><br>
    <hr>
    <div class="row">
    	<div class="col-md-12 col-xs-12 form-group">
    		<h2>OTHER OPPORTUNITIES</h2>
    	</div>
    	<div class="col-md-6 col-xs-12 form-group text-center">
    		<img class="img-responsive com-img" src="http://54.153.36.130/assets/img/rs=w_600,h_300,cg_true.webp" ><br>
    		<h2>A workplace where everyone matters.</h2>
    		<!-- <a href="employee/signup" class="btn btn-success">Apply Now</a> -->
    		<a href="employee/signup" class="btn btn-success">Apply Now</a>

    	</div>
    	<div class="col-md-6 col-xs-12 form-group text-center">
    		<img class="img-responsive com-img" src="http://54.153.36.130/assets/img/rs=w_600,h_300,cg_true (1).webp"><br>
    		<h2>BWT's Internship Program</h2>
    		<a href="{{route('internshipSignup')}}" class="btn btn-success">Apply Now</a>   		
    	</div>
    </div>
 </div>

@endsection