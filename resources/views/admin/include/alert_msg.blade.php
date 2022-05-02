<div class="container">
   @if($message=Session::get('success'))
  <div class="card-alert card green">
    <div class="card-content white-text">
      <span class="card-title white-text darken-1"><i class="material-icons"></i>Success</span>
      <p>{{ $message }}</p>
    </div> 
    <!-- <button type="button" class="close pink-text" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button> -->
  </div> 
  @endif

  @if($errormessage=Session::get('errormsg'))
  <div class="card-alert card pink lighten-5">
    <div class="card-content pink-text darken-1">
      <span class="card-title pink-text darken-1">Error</span>
      <p>{{ $errormessage }}</p>
    </div> 
    <!-- <button type="button" class="close pink-text" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button> -->
  </div> 
  @endif
  @if(count($errors) > 0 )
    <div class="card-alert card gradient-45deg-red-pink">
      <div class="card-content white-text">
          <!-- <p> <i class="material-icons">error</i> DANGER : The daily report has failed</p> -->
          <ul class="p-0 m-0" >
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
      </div>
      <!-- <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
      </button> -->
    </div> 
  @endif
</div>