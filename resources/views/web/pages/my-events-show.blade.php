@extends('web.welcome')

@section('title','My Events')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    .btns {
   font-size: 10px !important;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 2.5px;
    box-shadow: none !important;
    border: 0;
    padding: 8px 13px !important;
}
.title{ font-weight: 500; margin: 20px 0px 0px 0px; text-transform: capitalize }
.description{ font-size: 17px }
</style>
<div class="wrap-height"><br />
    <div class="row">
        <div class="col-md-6 text-right">
        </div>
        <div class="col-md-6 text-right">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
        
    </div>
    <hr>
   <div class="row">
    <div class="col-md-3 text-center">
    <!-- <img src="{{$event->image_url}}" class="img-responsive" alt="{{$event->name}}" height="600"> -->
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/The_Event_2010_Intertitle.svg/1200px-The_Event_2010_Intertitle.svg.png" class="img-responsive" alt="{{$event->name}}" height="600">
    <h2 class="title"><i>{{$event->name}}</i></h2>
    <h3> <p class="description">{{$event->event_description}}</p></h3>

    <div class="caption" style="margin-top:2%;">
                              <!-- <h4 class="text-center">{!!$event->event_description!!}</h4> -->
                              @if (Auth::guard('web_user')->check())
                              @if ($event->isRegistered == 1)
                              <center><span class="text-success">Registered</span></center>
                              @else
                              <center><a href="javascript:void(0);" class="readMore" data-toggle="modal"
                                      data-target="#event-{{$event->id}}">Register</a></center>
                              @endif
                              @else
                              <center><a href="javascript:void(0);" class="readMore"
                                      onclick="window.location.href='{{url('/sign-in')}}'">Register</a></center>
                              @endif
                          </div>

                          @if (auth()->guard('web_user')->check())
                    <div id="event-{{$event->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" id="closemodal">&times;</button>
                                  <h4 class="modal-title">Event Details</h4>
                              </div>
                              <div style="margin-left:10px; margin-right:10px;">
                                  <table class="table table-striped">

                                      <tbody>
                                          <tr>
                                              <th>Name</th>
                                              <td>{{$event->name}}</td>
                                          </tr>
                                          <tr>
                                              <th>Type</th>
                                              <td>{{$event->type}}</td>
                                          </tr>
                                          <tr>
                                              <th>Date</th>
                                              <td>{{$event->from}}</td>
                                          </tr>
                                          <tr>
                                              <th>Vanue</th>
                                              <td>{{$event->venue}}</td>
                                          </tr>
                                      </tbody>
                                  </table>
                                  <br>
                                  <h4 class="modal-title">Profile Details</h4>
                                  <table class="table table-striped">
                                      <tbody>
                                          <tr>
                                              <th>Name</th>
                                              <td>{{auth()->guard('web_user')->user()->name}}</td>
                                          </tr>
                                          <tr>
                                              <th>Email</th>
                                              <td>{{auth()->guard('web_user')->user()->email}}</td>
                                          </tr>
                                          <tr>
                                              <th>Mobile</th>
                                              <td>{{auth()->guard('web_user')->user()->mobile}}</td>
                                          </tr>
                                          <tr>
                                              <th>Date Of Birth</th>
                                              <td>{{auth()->guard('web_user')->user()->dob}}</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <div class="modal-footer">
                                  <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                                  <button type="submit" class="btn btn-success joinevent" data-event="{{$event->id}}" >Join</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endif
                          
</div>
    
   </div>
</div>
<hr>
<div class="row">
    <h1>Registered user</h1>
      <table class="table table-hover table-dark">
              <thead>
                   <tr>
                     <th scope="col"> User Name</th>
                     <th scope="col">User Email</th>
                     <th scope="col"> User Contact no.</th>
                     <th scope="col"> Register Date</th>
                   </tr>
             </thead>
             <tbody>
                 @foreach ($event->registratons as $registraton)
                 <tr>
                    <td>{{$registraton->user->name}}</td>
                    <td>{{$registraton->user->email}}</td>
                    <td>{{$registraton->user->mobile}}</td>
                    <td>{{$registraton->created_at->format('d M Y')}}</td>
                 </tr>                     
                 @endforeach
             </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('.joinevent').click(function(){
            let event = $(this).attr('data-event')
            $.ajax({
                url: "{{route('register-event')}}",// url where to submit the request
                type : "POST", // type of action POST || GET
                data :{
                    event_id:event,
                    _token:'{{csrf_token()}}'
                } , // post data || get data
                success : function(result) {
                    $('#closemodal1').click();
                    swal({
                    title: 'This Event Successfully Join',
                    text: '',
                    icon: 'success',
                    button: 'Ok', });
                    setTimeout(function(){
                        window.location.reload(true)
                    },2000)
                }
            })
        });
    });
</script>

<script>
    $( "#event_form" ).submit(function( event ) {
         event.preventDefault(); 
    var Data=$("#event_form").serialize();    
            $.ajax({
                 url: "{{route('add-upcoming-event')}}",
                type : "POST",
                data: new FormData(this),
                contentType: false,
                processData: false,
                success : function(result) { 
                    if(result.status==1){ 
                        $('#addEvent').modal('hide');
                        $('#tabveData').append(`
                        <tr>
                          <th scope="row">${result.data.id}</th>
                          <td>${result.data.name}</td>
                          <td>${result.data.from}</td>
                          <td>${result.data.to}</td>
                          <td>${result.data.venue}</td>
                        </tr>
                        `);
                        $('.msg').show();
                        $('.msg').html('Events Add Successfully !!');
                        setTimeout(()=>{
                          window.location.reload(true)
                        },2000)
                    }
                },               
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            }) 
});

function showModal(){ 
    $('#viewEvents').modal('show');
}

function showRequest(id){
    
    $("#event_id").val(id);
    $('#exampleModal').modal('show');
}


function sendRequest(){
    
    var checkValue=$('input[name=events]:checked').val(); 
    var evnt_id=$("#event_id").val();
if(checkValue!=""){
 
 
 var _token='{{ csrf_token() }}';
 $.ajax({
              url: "{{route('add-my-request')}}",// url where to submit the request
             type : "POST", // type of action POST || GET
            data :{
                checkValue:checkValue,
                evnt_id:evnt_id,
                _token:_token
            } , // post data || get data
             success : function(result) {
                
                if(result.status==1){
                    $("#messageRequest").html(`<div class="alert alert-primary" role="alert">
Request Send Successfully !!
</div>`);
setTimeout(function(){ location.reload(); }, 2000);

                    
                }else if(result.status==0){
                    
                }
             },
            
             error: function(xhr, resp, text) {
                 console.log(xhr, resp, text);
             }
         })
}else{
 alert("Please Select One Option");    
}
}

</script>
@endsection