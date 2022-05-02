@extends('web.welcome')

@section('title','Profile')

@section('content')
<!--<div class="wrap-height top30">-->
<!--    <form>-->
<!--      <div class="row form-group">-->
<!--        <div class="col-md-4 col-xs-12">-->
<!--          <div class="avatar-upload">-->
<!--            <div class="avatar-edit">-->
<!--                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />-->
<!--                <label for="imageUpload" data-toggle="tooltip" title="Change Profile Image">-->
<!--                  <i class="fa fa-edit"></i>-->
<!--                </label>-->
<!--            </div>-->
<!--            <div class="avatar-preview">-->
<!--                <img id="imagePreview" src="http://i.pravatar.cc/500?img=7">-->
<!--            </div>-->
<!--        </div>-->
<!--        </div>-->
<!--        <div class="col-md-8 col-xs-12">-->
<!--          <div class="form-card">-->
<!--            <div class="row">-->
<!--              <div class="col-md-6 col-xs-12 form-group">-->
<!--                <label>First Name</label>-->
<!--                <input type="text" name="fname" class="form-control">-->
<!--              </div>-->
<!--              <div class="col-md-6 col-xs-12 form-group">-->
<!--                <label>Last Name</label>-->
<!--                <input type="text" name="lname" class="form-control">-->
<!--              </div>-->
<!--              <div class="col-md-6 col-xs-12 form-group">-->
<!--                <label>Email</label>-->
<!--                <input type="email" name="email" class="form-control">-->
<!--              </div>-->
<!--              <div class="col-md-6 col-xs-12 form-group">-->
<!--                <label>Phone Number</label>-->
<!--                <input type="text" name="phone" class="form-control">-->
<!--              </div>-->
<!--              <div class="col-md-6 col-xs-12 form-group">-->
<!--                <label>Password</label>-->
<!--                <input type="password" name="pass" class="form-control">-->
<!--              </div>-->
<!--              <div class="col-md-6 col-xs-12 form-group">-->
<!--                <label>Confirm Password</label>-->
<!--                <input type="password" name="cpass" class="form-control">-->
<!--              </div>-->
<!--              <div class="col-md-12 col-xs-12 form-group text-right">-->
<!--                <button type="button" class="btn btn-success">Save Changes</button>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </form>-->
<!-- </div>-->

<div class="wrap-height"><br/>
<div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>

    @foreach (['danger', 'warning', 'success', 'info'] as $key)
        @if(Session::has($key))
            <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
        @endif
   @endforeach


    <form method="post" action="{{route('profile-update')}}" enctype="multipart/form-data">
        @csrf
      <div class="row form-group">
        <div class="col-md-4 col-xs-12">
          <div class="avatar-upload">
            <div class="avatar-edit">

                <input type="file" id="imageUpload" name="profile_image" onchange="loadPreview(this);" accept=".png, .jpg, .jpeg" />
                <label for="imageUpload" data-toggle="tooltip" title="Change Profile Image">
                  <i class="fa fa-edit"></i>
                </label>
            </div>

            @if(!empty($user->profile_image))
                <div class="avatar-preview">
                    <img id="imagePreview" src="{{asset('/storage/profile/')}}{{'/'.$user->profile_image}}">
                </div>
            @else

                <div class="avatar-preview">
                    <img id="imagePreview" src="http://i.pravatar.cc/500?img=7">
                </div>

            @endif
        </div>
        </div>
        @if($user)
        @php
        
        $name = explode(" ",$user->name)
        
        @endphp
        @endif
      
        <div class="col-md-8 col-xs-12">
          <div class="form-card">
            <div class="row">
              <div class="col-md-6 col-xs-12 form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value={{$name[0] ?? ''}}>
              </div>
              <div class="col-md-6 col-xs-12 form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value={{$name[1] ?? ''}}>
              </div>
              <div class="col-md-6 col-xs-12 form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value={{$user->email ?? ''}}>
              </div>
              <div class="col-md-6 col-xs-12 form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control" value="{{$user->mobile ?? ''}}">
              </div>
              <!--Amrit Code Start-->
              <div class="col-md-6 col-xs-12 form-group">
                <label>Gender</label>
                <select name='gender' class="form-control">
                    <option value="">Select Gender</option>
                    <option value="1" @php if($user->gender=='1'){ echo 'selected';} @endphp>Male</option>
                    <option value="2" @php if($user->gender=='2'){ echo 'selected';} @endphp>Female</option>
                </select>
              </div>
              
              <div class="col-md-6 col-xs-12 form-group">
                <label>Age</label>
                <input type="date" name="dob" class="form-control" value="@php echo date('Y-m-d', strtotime($user->dob)); @endphp">
              </div>
              
              <div class="col-md-6 col-xs-12 form-group">
                <label>Address</label>
                <textarea name="address" class="form-control" placeholder='Enter Address'>{{$user->address ?? ''}}</textarea>
              </div>
              <div class="col-md-6 col-xs-12 form-group">
                <label>Occupation</label>
                <textarea name="occupation" class="form-control" placeholder='Enter Occupation'>{{$user->occupation ?? ''}}</textarea>
              </div>

              <div class="col-md-6 col-xs-12 form-group">
                <label>Channel Name</label>
                <input type="text" name="ChannelName" class="form-control" value="{{$user->ChannelName ?? ''}}">
              </div>
              
              <!--Amrit Code End-->
              
              <!--<div class="col-md-6 col-xs-12 form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control">
              </div>
              <div class="col-md-6 col-xs-12 form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
              </div>-->
              <div class="col-md-12 col-xs-12 form-group text-right">
                <button type="submit" class="btn btn-success">Save Changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="col-md-8" style="float:right">
    <form method="post" action="{{route('password-change')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6 col-xs-12 form-group">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control">
              </div>
              <div class="col-md-6 col-xs-12 form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
              </div>
              <div class="col-md-12 col-xs-12 form-group text-right">
                <button type="submit" class="btn btn-success">Change Password</button>
              </div>
    </form>
    </div>
 </div>
 




 <script>
    function loadPreview(input, id) {
      id = id || '#imagePreview';
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $(id)
                      .attr('src', e.target.result)
                      console.log('profile_image',e.target.result);

          };

          reader.readAsDataURL(input.files[0]);
      }
   }
  </script>





@endsection
