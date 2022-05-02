@extends('layouts.admin')
@section('title') Admin |Events | Edit @endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/page-users.css') }}">
<!-- END: VENDOR CSS-->
@endsection

@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
  <div class="left-content">
    <div>
      <h4 class="main-content-title tx-22 mg-b-1 mg-b-lg-1">Events</h4>
    
    </div>
  </div>

  <div class="right-content">

      <div class="dropdown main-header-message right-toggle">
        <a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
          <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </a>
      </div>
    </div>

</div>
<!-- /breadcrumb -->

<!-- row -->

<!--Row-->
<div class="row row-sm">
  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive userlist-table">


          <form class="form-horizontal"  method="post" id="add_state_form" action="{{ route('admin.events.update',$event->id) }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="type" value="up_coming" />

            
            <div class="row m-0">

            <div class="form-group col-sm-12">
              <label for="name"> Event Name</label>
              <input type="text" class="form-control" id="name" value="{{$event->name}}" name="name" onkeyup="convertToSlug(this.value)" placeholder="Enter  Name">
              <p class="small">{{url('/')}}/<span id="url"></span></p>
              <input type="hidden" class="form-control" id="slug" value="" name="slug" >
              @error('name')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
            
            <div class="form-group col-sm-6">
              <label for="event_from">From</label>
              <input type="date" name="event_from" class="form-control" value="{{$event->from}}">
              @error('event_from')
              <span class="text-danger">{{$message}}</span>
            @enderror            
            </div>

            <div class="form-group col-sm-6">
              <label for="event_to">To</label>
              <input type="date" name="event_to" class="form-control" value="{{$event->to}}">
              @error('event_to')
              <span class="text-danger">{{$message}}</span>
            @enderror            
            </div>

            <div class="form-group col-sm-12">
                <label>Select Event Type</label>
                <select name="type" class="form-control" >
                                    
                  <option value="3">Public</option>  
                  <option value="1">Private</option>
                  <option value="2">Special</option>                
                </select>
                @error('type')
                <span class="text-danger">{{$message}}</span>
              @enderror 
              
            </div>

            <div class="form-group col-sm-12">
              <label for="venue"> Event Venue</label>
              <input type="text" class="form-control" id="venue" value="{{$event->venue}}" name="venue" placeholder="Enter Venue">
              
              @error('venue')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>


            <div class="form-group col-sm-12">
              <label for="event_description">Event Description</label>
                <textarea class="ckeditor form-control" name="event_description" required>{{$event->event_description}}</textarea>
            
              @error('event_description')
              <span class="text-danger">{{$message}}</span>
            @enderror 
            </div>

            <div class="form-group col-sm-12">
              <label for="venue"> Picture</label>
              <input type="file" class="form-control" id="file"  name="media" >
              
              @error('venue')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group col-sm-12  mb-0 mt-3 justify-content-end">
              <div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
      </div>
    </div>

      </form>


        </div>
       
      </div>
    </div>
  </div><!-- COL END -->
</div>


<!--/Sidebar-right-->
@endsection
@section('script')
    <script src="{{ asset('app-assets/vendors/jquery-validation/jquery.validate.min.js') }}">   </script>
    <script src="{{ asset('app-assets/js/scripts/ui-alerts.js') }}"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      $('#add_state_form').validate({ // initialize the plugin
        rules: {
          name: {
            required: true,
          },
          parent_id: {
            required: true,
          },
        },
      });
      $('#add_state_form').on('focus', ':input', function(){
          $(this).attr('autocomplete', 'off' );
      });

      $('#parent_id').on('change',function(){
        var pos = $('option:selected', this).attr('labelVal');
        $('#position').val(pos);
      })
    });
  function convertToSlug(str)
  {
    //replace all special characters | symbols with a space
    str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();

    // trim spaces at start and end of string
    str = str.replace(/^\s+|\s+$/gm,'');

    // replace space with dash/hyphen
    str = str.replace(/\s+/g, '-');
    document.getElementById("url").innerHTML= str;
    $('#slug').val(str);
  }


  </script>
  @endsection

