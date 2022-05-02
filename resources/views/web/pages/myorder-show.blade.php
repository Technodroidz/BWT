@extends('web.welcome')

@section('title','MyOrder')

@section('content')

<div class="row ">
    <div class="col-md-12 text-right form-group mt-2">
        <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
    </div>
</div>


<div class="wrap-height top30">
    <h2 class="text-left">My Order Detail</h2>
    Order ID : {{$order->orderID}} |
    <span>Ordered on {{$order->created_at->format('d F Y')}} </span>|
    <span>Status : <strong class="badge badge-primary">{{$order->status}}</strong> </span>

    <div class="order-detialss">
        <div class="topinfo">
	        <div class="row">
	            <div class="col-md-4">
	            	<strong>Shipping Address</strong>
					<p>{{$order->address['name']}}</p>
					<p>{{$order->address['address']}}</p>
					<p>{{$order->address['locality']}}</p>
					<p>{{$order->address['city']}}, {{$order->address['state']}} {{$order->address['pincode']}}</p>
	            </div>
	            <div class="col-md-4">
	            	<strong>Payment Method</strong>
					<p>Pay on Delivery (Cash/Card). Cash on delivery (COD) available. Card/Net banking acceptance subject to device availability.</p>
	            </div>
	            <div class="col-md-4">
	            	<strong>Order Summary</strong>
	            	<div class="pricce">
					<p><span>Shipping:</span>  <span>{{$order->shipping}}</span></p>
					<p><span>Total:</span>  <span>{{$order->price}}</span></p>
					<p><span><b>Grand Total:</b></span>  <span><b>{{$order->sub_total}}</b></span></p>
	            </div>
	        </div>

        </div>

    </div>
        <div class="pro-info">
            <div class="col-md-10">
                <div class="pr-detail">
                <img src="{{$order->product_image_url}}" class="img-responsive">
                <strong>
                    {{$order->product_name}}</strong>
            </div>
            </div>

            <div class="col-md-2">
            <div class="row">
               <div class="btnn-product">
                    {{-- <a href="#" class="btn btn-product btn-product-cart add-cart">Track Package</a> --}}
                    @if ($order->status=='Delivered')
                    <form action="{{URL::signedRoute('myorder.return',$order->id)}}" method="post">
                        @csrf()
                        <button type="submit" class="btn btn-product btn-product-cart remove-cart"
                                onclick="return confirm('Are you sure?')">Return</button>
                    </form>
                    {{-- <a href="#" class="btn btn-product">Leave Feedback</a> --}}
                    @else
                        @if (in_array($order->status,['Pending','Process']))
                        <form action="{{URL::signedRoute('myorder.cancel',$order->id)}}" method="post">
                            @csrf()
                            <button type="submit" class="btn btn-product btn-product-cart add-cart"
                                onclick="return confirm('Are you sure?')">Cancel Order</button>
                        </form>
                        @endif
                    @endif
                     {{-- <a href="#" class="btn btn-product btn-product-cart add-cart">Seller Feedback</a> --}}

                </div>
            </div>
        </div>

        </div>
</div>
</div>
@endsection



