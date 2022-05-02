@extends('web.welcome')

@section('title','MyOrder')

@section('content')

<div class="row ">
    <div class="col-xl-12">
        <ul id="tabs" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#amazontv" class="amazon active" role="tab"
                    data-toggle="tab"><img src="{{asset('assets/img/amazon-t.png')}}"></a></li>
            <li role="presentation"><a href="#appletv" role="tab" class="apple" data-toggle="tab"><img
                        src="https://www.apple.com/v/apple-tv-4k/n/images/overview/hero/hero_logo_color__dyjzcbomgxiu_large.png"></a>
            </li>
            <li role="presentation"><a href="#googletv" role="tab" class="google" data-toggle="tab"><img
                        src="https://tv.google//static/images/logos/gtv.svg"> </a></li>
            <li role="presentation"><a href="#roku" role="tab" class="roku" data-toggle="tab"><img
                        src="https://vidapp.com/wp-content/uploads/2019/06/RokuTVLogo.png"> </a></li>
        </ul>
    </div>
    <div class="col-md-12 text-right form-group">
        <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
    </div>
</div>


<div class="wrap-height top30">
    @forelse ($orders as $order)
    <div class="order">
        <div class="top-info">
            <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <th>ORDER PLACED</th>
                    <th>TOTAL</th>
                    <th>SHIP TO</th>
                    <th>ORDER id</th>
                    <th>STATUS</th>
                </tr>
                <tr>
                    <td>{{$order->created_at->format('M-d-Y')}}</td>
                    <td>{{$order->sub_total}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->orderID}}</td>
                    <td>{{$order->status}}</td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="pro-info">
            <div class="col-md-7">
                <div class="pr-detail">
                    <img src="{{$order->product_image_url}}" class="img-responsive">
                    <strong>{{$order->product_name}}</strong>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="btnn-product">

                        <a href="{{URL::signedRoute('myorder.show',$order->id)}}"
                            class="btn btn-product btn-product-cart add-cart">Order Details</a>

                        {{-- <a href="#" class="btn btn-product btn-product-cart remove-cart">Return Item</a> --}}
                        {{-- <a href="#" class="btn btn-product">Leave Feedback</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="order">
        <div class="pro-info">
            <h3 class="m-4">You don't have orders</h3>
        </div>
    </div>
    @endforelse
</div>
@endsection



