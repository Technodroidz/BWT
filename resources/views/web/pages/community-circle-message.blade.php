@extends('web.welcome')

@section('title','Community-circle-message')

@section('content')

<div class="wrap-height">
    <div class="row">
        <div class="col-md-12 form-group text-right">
            <button onclick="goBack()" class="btn btn-success"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
    <form id="frn">
        <div class="row">
            <div class="col-md-12 form-group">
                <h4>Post Community Circle's Message</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12 form-group">
                <label>First Name</label>
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label>Last Name</label>
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label>Email ID</label>
                <input type="email" name="" class="form-control">
            </div>
            <div class="col-md-6 col-xs-12 form-group">
                <label>Subject</label>
                <input type="text" name="" class="form-control">
            </div>
            <div class="col-md-12 form-group">
                <label>Message</label>
                <textarea cols="6" rows="4" class="form-control" placeholder="Type here...."></textarea>
            </div>
            <div class="col-md-12 form-group">
                <button class="btn btn-success">Submit Message</button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12 form-group active-with-click">
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="comntName">John Doe</p>
            </div>
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="comntName">John Doe</p>
            </div>
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="comntName">John Doe</p>
            </div>
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <p class="comntName">John Doe</p>
            </div>
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <p class="comntName">John Doe</p>
            </div>
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="comntName">John Doe</p>
            </div>
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="comntName">John Doe</p>
            </div>
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="comntName">John Doe</p>
            </div>
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <p class="comntName">John Doe</p>
            </div>
            <div class="comment-section">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                <p class="comntName">John Doe</p>
            </div>
            <a href="" class="load-more1">Load More</a>
        </div>
    </div>
</div>

@endsection