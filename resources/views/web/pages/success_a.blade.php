@extends('web.welcome')

@section('title','Success')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    label{font-size: 12px !important;}
</style>

<div class="wrap-height">
                        <div class="row" style="margin-top:10px;margin-left:12%;margin-right:5%;top: 12%;position: absolute;">
                           
                        <div class="row" style="margin-top:10px; border-style:ridge; padding: 18px;border-width: 5px;border-color: #5f2652;border-radius: 50px;" >
                           <div class="col-md-12" style="padding-top: 15px;">
                        <div class="form-head text-center mb-5">

                        <img src="{{ asset('assets/img/use/smalllogo.png') }}" style="width: 22%;margin-bottom: 32px;">
                        
          <h4 class="text-center">         
            You have successfuly registered to apply to Busking With Talent.</h4>

<h4 class="text-center">
Your Application Id is : <?php echo mt_rand(); ?>
</h4>

<h4 class="text-center">
If you do choos to continue your application later, you can sign in here <a href="http://54.153.36.130/sign-in">
click to login
</a>
</h4>
      </div>

      </div>
                     </div>    </div>
                     </div>
@endsection
