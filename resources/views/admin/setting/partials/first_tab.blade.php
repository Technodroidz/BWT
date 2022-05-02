 <div id="general">
    <div class="card-panel">
        <div class="display-flex">
            <!-- <div class="media">
                <img src="../../../app-assets/images/avatar/avatar-12.png" class="border-radius-4" alt="profile image" height="64" width="64">
            </div> -->
            <div class="media-body" >
              <label for="uname">Company Logo</label>
                <div class="general-action-btn dropzone" id="dropzoneForm" >
                    <!-- <button id="select-files" class="btn indigo mr-2">
                        <span>Upload new photo</span>
                    </button>
                    <button class="btn btn-light-pink">Reset</button> -->
                </div>
                <small>Allowed JPG, GIF or PNG. Max size of 800kB</small>
               <!--  <div class="upfilewrapper">
                    <input id="upfile" type="file" />
                </div> -->
            </div>
        </div>
        <div class="divider mb-1 mt-1"></div>
        
            <div class="row">
              <form method="post" class="formValidate" enctype="multipart/form-data" id="saveSetting1" method="get" action="{{ route('admin.settings.save') }}">
                @csrf
               <!--  <div class="col s12">
                    <div class="input-field">
                        <label for="uname">Username</label>
                        <input type="text" id="uname" name="uname" value="hermione007" data-error=".errorTxt1">
                        <small class="errorTxt1"></small>
                    </div>
                </div> -->
                <input type="hidden" name="type" value="logo" id="logo_hidden">
                <div class="col s12">
                    <div class="input-field">
                        <input id="company" name="company_name" type="text">
                        <label for="company" >Company Name</label>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" value="{{ Auth::user()->name }}" data-error=".errorTxt2" disabled>
                        <small class="errorTxt2"></small>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" value="{{ Auth::user()->email }}" data-error=".errorTxt3" disabled> 
                        <small class="errorTxt3"></small>
                    </div>
                </div>
                <!-- <div class="col s12">
                    <div class="card-alert card orange lighten-5">
                        <div class="card-content orange-text">
                            <p>Your email is not confirmed. Please check your inbox.</p>
                            <a href="javascript: void(0);">Resend confirmation</a>
                        </div>
                        <button type="button" class="close orange-text" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div> -->
                <div class="col s12 display-flex justify-content-end form-action">
                    <button type="button" class="btn indigo waves-effect waves-light mr-2" id="submit-all">
                        Save changes
                    </button>
                    <button type="button" class="btn btn-light-pink waves-effect waves-light mb-1" >Cancel</button>
                </div>
                </form>
               
            </div>
        
    </div>
</div>