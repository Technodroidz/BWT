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

         
            
            
@if(@$_GET['type'] == 1)

<h4 class="text-center">
You have successfuly registered to apply to Busking With Audition.
</h4>

<h4 class="text-center">
Please continue with the application form to the finish screen, you can sign <a href="{{ url('sign-in') }}">
    click to login
</a>
</h4>

@elseif(@$_GET['type'] == 2)

<h4 class="text-center">
Yor data has been successfuly saved .
</h4>

<h4 class="text-center">
Please complete your account to upload media file. you can signup again with your saved data <a href="#" onclick="goBack()">
    click to signup
</a>

</h4>

@elseif(@$_GET['type'] == 3)

<h4 class="text-center">
Your data has been successfuly submitted .
</h4>

<h4 class="text-center">
A new email verfication sent to your inbox ,please follow the link .
</a>

</h4>

@elseif(@$_GET['type'] == 4)

<h4 class="text-center">
Your data has been successfuly submitted .
</h4>

<h4 class="text-center">
A new email verfication sent to your inbox ,please follow the link .
</a>

</h4>

@elseif(@$_GET['type'] == 6)

<h4 class="text-center">
You have successfuly registered to apply to Busking With Studio.

</h4>

<h4 class="text-center">
Please continue with the application form to the finish screen, you can sign <a href="{{ url('sign-in') }}">
    click to login
</a>

</h4>

@else
.....
</h4>

<!-- <h4 class="text-center">
Your Application Id is : <?php //echo mt_rand(); ?>
</h4> -->
<!-- 
<h4 class="text-center">
Please continue with the application form to the finish screen, you can sign <a href="{{ url('sign-in') }}">
    click to login
</a>
</h4> -->

@endif
      </div>

      </div>
                     </div>    </div>
                     </div>
@endsection
