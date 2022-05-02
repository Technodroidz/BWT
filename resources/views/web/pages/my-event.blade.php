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
</style>
<div class="wrap-height"><br />
    <div class="row">
        <div class="col-md-6">
            @if (Auth::guard('web_user')->check())
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#addEvent">Create Event</a>           
            @else
            <a href="{{route('sign-in')}}" class="btn btn-success">Create Event</a>
            @endif
        </div>
        <div class="col-md-6 text-right">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="alert alert-primary msg" style="display:none;" role="alert">
        </div>
        <div class="col-md-12"> 
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-8">
                      <table class="table table-hover table-dark">
                          <thead>
                              <tr>
                                  <th scope="col">Date</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">From</th>
                                  <th scope="col">To</th>
                                  <th scope="col">Venue</th>

                                  @if (Auth::guard('web_user')->check())
                                  @php
                                  $id=Auth::guard('web_user')->user()->id;
                                  $data = DB::table('channel')->select('*')->where('user_id',$id)->first();
                                  @endphp
                                  @if($data)
                                  <th scope="col">status</th>
                                  @else
                                  @endif
                                  @else
                                  @endif
                              </tr>
                          </thead>
                          <tbody id="tabveData">
                              @if(!empty($events))

                              @foreach($events as $value)
                              <tr>
                                  <th scope="row">{{$loop->index+1}}</th>
                                  <td> <a href="{{route('my-event-show',$value->slug)}}">{{$value->name}}</a></td>
                                  <td>{{$value->from}}</td>
                                  <td>{{$value->to}}</td>
                                  <td>{{$value->venue}}</td>

                                  @if (Auth::guard('web_user')->check())
                                  @if($value->request_status==1)
                                      <td><button type="button" class="btns btn-primary">Pending</button></td>
                                    @elseif($value->request_status==2)
                                      <td><span class="badge badge-success">Accepted</span></td>
                                      @elseif($value->request_status==3)
                                      <td><span class="badge badge-danger">Rejected</span></td>
                                    @else
                                    
                                    @endif
                                  @endif

                                  <!-- @if (Auth::guard('web_user')->check())
                                    @if($value->request_status==1)
                                      <td><button type="button" class="btns btn-primary">Pending</button></td>
                                    @elseif($value->request_status==2)
                                      <td><span class="badge badge-success">{{$value->request_for}}</span></td>
                                    @else
                                      <td><button type="button" class="btns btn-success"
                                              onclick="showRequest({{$value->id}})">Request</button></td>
                                    @endif
                                  @endif -->
                              </tr>
                              @endforeach
                              @endif
                          </tbody>
                      </table>
                  </div>
                  <div class="col-md-4" style="padding-top: 12px;background: #5F2652;color: white;">
                      <form action="/action_page.php">

                          <div class="form-group">
                              <label for="email">State:</label>
                              <select name="state" class="form-control">
                                  <option value="">Select State</option>
                                  <option value="">A</option>
                                  <option value="">B</option>
                                  <option value="">C</option>
                                  <option value="">D</option>
                                  <option value="">E</option>
                                  <option value="">F</option>
                                  <option value="">G</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="email">City:</label>
                              <select name="state" class="form-control">
                                  <option value="">Select City</option>
                                  <option value="">A</option>
                                  <option value="">B</option>
                                  <option value="">C</option>
                                  <option value="">D</option>
                                  <option value="">E</option>
                                  <option value="">F</option>
                                  <option value="">G</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="email">VENUE:</label>
                              <select name="state" class="form-control">
                                  <option value="">Select Venue</option>
                                  <option value="">A</option>
                                  <option value="">B</option>
                                  <option value="">C</option>
                                  <option value="">D</option>
                                  <option value="">E</option>
                                  <option value="">F</option>
                                  <option value="">G</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="email">ARTIST:</label>
                              <select name="state" class="form-control">
                                  <option value="">Select Artist</option>
                                  <option value="">A</option>
                                  <option value="">B</option>
                                  <option value="">C</option>
                                  <option value="">D</option>
                                  <option value="">E</option>
                                  <option value="">F</option>
                                  <option value="">G</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="email">PROMOTER:</label>
                              <select name="state" class="form-control">
                                  <option value="">Select Promoter</option>
                                  <option value="">A</option>
                                  <option value="">B</option>
                                  <option value="">C</option>
                                  <option value="">D</option>
                                  <option value="">E</option>
                                  <option value="">F</option>
                                  <option value="">G</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="email">Start date:</label>
                              <input type="date" value="" class="form-control">
                          </div>
                          <div class="form-group">
                              <label for="email">End date:</label>
                              <input type="date" value="" class="form-control">
                          </div>
                      </form>
                  </div>
              </div>
            </div>
          <div id="addEvent" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"
                              id="closemodal">&times;</button>
                          <h4 class="modal-title">Add New Event</h4>
                      </div>
                      <form id="event_form" method="POST" enctype="multipart/form-data" >
                          @csrf
                          <div class="modal-body">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="fromDate">Event Name:</label>
                                          <input type="text" class="form-control" placeholder="Enter event"
                                              name="name" id="eventName">
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="fromDate">From:</label>
                                          <input type="date" class="form-control" placeholder="Enter from date"
                                              name="from" id="fromDate">
                                      </div>
                                  </div>
                                  <input type="hidden" name="type" value="up_coming" />

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="toDate">To:</label>
                                          <input type="date" class="form-control" name="to" id="toDate">
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="toDate">Venue:</label>
                                          <input type="text" class="form-control" id="venue" name="venue"
                                              placeholder="Enter Venue">
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="toDate">Image:</label>
                                          <input type="file" class="form-control" id="event_image"
                                              name="image" placeholder="Enter Venue">
                                      </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <textarea name="event_description" class="form-control" cols="30" placeholder="Enter Description" rows="10"></textarea>
                                    </div>
                                  </div>

                                  <div class="col-md-12 form-group">
                                  
                                  <label>   Event Types: </label>
                                      <div class="checkbox" style="margin-left: -20px;">
                              <label><input type="radio" value="1" name="request_for" required="">
                                  Private
                              </label>
                              <input type="hidden" name="" id="event_id">
                         
                              <label><input type="radio" value="2" name="request_for" required="">
                                  Special
                              </label>
                          </div>
                      </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                              <a href="#" type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                              <button type="submit" class="btn btn-success addEsssveyyuntclick">Add Event</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Request Send For</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="col-md-12 form-group">
                          <div class="checkbox">
                              <label><input type="radio" value="1" name="events" required="">
                                  Request Send For Private Events
                              </label>
                              <input type="hidden" name="" id="event_id">
                          </div>
                          <div class="checkbox">
                              <label><input type="radio" value="1" name="events" required="">
                                  Request Send For Special Events
                              </label>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" onclick="sendRequest()" class="btn btn-primary">Send</button>
                  </div>
              </div>
          </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="viewEvents" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLsssabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Events Details</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <div class="col-md-6">
                          <span class="anchor" id="formPayment"></span>

                          <!-- form card cc payment -->
                          <div class="card card-outline-secondary">
                              <div class="card-body">
                                  <form autocomplete="off" class="form" role="form">
                                      <div class="form-group">
                                          <label for="cc_name"> Event's Name</label>
                                          <input readonly class="form-control" id="cc_name" value="Event Name"
                                              required="required" title="First and last name" type="text">
                                      </div>
                                      <div class="form-group">
                                          <label>Event Venue</label>
                                          <input readonly autocomplete="off" class="form-control"
                                              value="Venue" maxlength="20" pattern="\d{16}" required=""
                                              title="Credit card number" type="text">
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-md-12">From </label>
                                          <div class="col-md-4">
                                              <input readonly autocomplete="off" class="form-control"
                                                  value="12-05-2021" maxlength="20" pattern="\d{16}"
                                                  required="" title="Credit card number" type="text">
                                          </div>
                                          <label class="col-md-12">To </label>
                                          <div class="col-md-4">
                                              <input readonly autocomplete="off" class="form-control"
                                                  value="12-05-2021" maxlength="20" pattern="\d{16}"
                                                  required="" title="Credit card number" type="text">
                                          </div>
                                      </div>
                                      <hr>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
      </div>
</div>

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