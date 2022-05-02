@extends('web.welcome')

@section('title','Partners')


@section('content')
<style type="text/css">
    .mb-b{ margin-bottom: 0px; text-align: right}
    .invitation { margin: 20px; border:1px solid #d3d3d3; padding: 20px; }
    .peer { margin: 20px 0px; }
</style>

<div class="wrap-height">
    <br/>

    @if(@$_GET['u'] == 3)

    <div class="form-group" style="width: 47%;
    margin-left: 266px;
    position: absolute;
    top: 25%;">
      
      <div class="alert alert-success" role="alert">

      Your request has been successfully submitted. We will get back to you with more information.

</div>
</div>

@else

      <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>

        <form method="post" action="{{ route('partnerRegistration') }}" enctype="multipart/form-data">
                                @csrf()

    <input type="hidden" name="finalSubmit" value="1" class="form-control" placeholder="" required>
    <input type="hidden" name="uid" value="<?php echo @$_GET['uid']; ?>" class="form-control" placeholder="" required>


        <div class="card" style="box-shadow: 0px 0px 7px -1px #ccc;">
            <div class="card-body">


                <div class="row">


                <!-- <div class="col-md-12 col-xs-12 form-group">
                        <img class="img-responsive form-logo" src="http://54.153.36.130/assets/img/internship.png" width="100%" style="margin: 0 auto; display: block">
                    </div>-->

                 <div class="col-md-12 col-xs-12 form-group">
                
                    <div class="row" style="width: 100%;margin-left: -2px;">


                  


                     <div class="col-md-12 col-xs-12 text-center">
                          <h2 class="peer">PARTNER’S QUESTIONNAIRE FORM</h2>
                      </div>

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What skills do you have to make your opportunity with BWT unique? </label>
                        <input type="text" name="skills" class="form-control" placeholder="" required>
                    </div>

                    
                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What kind of partnership are you interested in developing with BWT? </label>
                        <input type="text" name="talent" class="form-control" placeholder="" required>
                    </div>
                    

                    <div class="col-md-12 col-xs-12 form-group">
                        <label>What is your experience (please check all that may apply)?</label>
                        <br/><br/>
                        <input class="form-check-input" type="checkbox" value="" name="achievement[]" value="Advertising & Marketing">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 26px;">
                         Advertising & Marketing
                        </label>
                        <br/>

                        <input class="form-check-input" type="checkbox" value="" name="achievement[]" value="Branding Ambassador">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 26px;">
                        Branding Ambassador
                        </label>
                        <br/>

                        <input class="form-check-input" type="checkbox" value="" name="achievement[]" value="Entertainment Industry">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 26px;">
                        Entertainment Industry
                        </label>
                        <br/>

                        <input class="form-check-input" type="checkbox" value="" name="achievement[]" value="Financial Interest">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 26px;">
                        Financial Interest
                        </label>
                        <br/>

                        <input class="form-check-input" type="checkbox" value="" name="achievement[]" value="Social Media">
                        <label class="form-check-label" for="flexCheckDefault" style="margin-left: 26px;">
                        Social Media
                        </label>

                    </div>




                    <div class="col-md-12 col-xs-12 form-group">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    @endif
 </div>

@endsection 
