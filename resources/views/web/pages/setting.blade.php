@extends('web.welcome')

@section('title','Settings')

@section('content')
<div class="wrap-height" id="pad16"><br>
    <div class="text-right form-group">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    <div class="row">
       <div class="col-md-12">
          <form class="setting">
             <div class="row">
                <div class="col-md-6 col-xs-12 form-group">
                   <label>Quality Adjustment</label>
                   <select class="form-control">
                      <option> Choose Quality Adjustment..</option>
                      <option value="1">Quality one</option>
                      <option value="2">Quality two</option>
                      <option value="3">Quality three</option>
                      <option value="4">Quality four</option>
                   </select>
                </div>
                <div class="col-md-6 col-xs-12 form-group">
                   <label>Audio / Sound</label>
                   <select class="form-control">
                      <option> Choose Audio / Sound..</option>
                      <option value="1">Audio one</option>
                      <option value="2">Audio two</option>
                      <option value="3">Audio three</option>
                      <option value="4">Audio four</option>
                   </select>
                </div>
                <div class="col-md-6 col-xs-12 form-group">
                   <label>Video Quality</label>
                   <select class="form-control">
                      <option> Choose Video Quality..</option>
                      <option value="1">Full Hd</option>
                      <option value="2">Hd</option>
                      <option value="3">Sd</option>
                      <option value="4">Average</option>
                   </select>
                </div>
                <div class="col-md-6 col-xs-12 form-group">
                  <label>Video Format</label>
                  <select class="form-control">
                    <option> Choose Video Format..</option>
                    <option value="1">MP4</option>
                    <option value="2">M4V</option>
                    <option value="3">MOV</option>
                    <option value="4">AVI</option>
                    <option value="5">WMV</option>
                    <option value="6">FLV</option>
                    <option value="7">MPG</option>
                    <option value="8">MPEG</option>
                  </select>
                </div>
                <div class="col-md-12 text-right">
                   <hr />
                   <button type="button" class="btn btn-success">Save Settings</button>
                   <button type="button" class="btn btn-primary">Cancel</button>
                </div>
             </div>
          </form>
       </div>
    </div>
 </div>
@endsection
