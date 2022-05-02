@extends('web.welcome')

@section('title','Boutique Order')

@section('content')

<div class="row ">
    <div class="col-md-12 text-right form-group mt-2">
        <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
    </div>
</div>


<div class="wrap-height top30">
    <h2 class="text-left">Boutique Order Detail</h2>
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
            <div class="col-md-9">
                <div class="pr-detail">
                <img src="{{$order->product_image_url}}" class="img-responsive">
                <strong>
                    {{$order->product_name}}</strong>
            </div>
            </div>

            <div class="col-md-3">
            <div class="row">
               <div class="btnn-product">
                    @if ($order->status!='Cancel')
                    <form action="{{URL::signedRoute('boutique-order.update',$order->id)}}" method="post">
                        @csrf()
                        @if (in_array($order->status,["Pending","Process","Delivered","Cancel"]))
                        <select name="status" class="form-control">
                            <option value="Pending" {{$order->status=='Pending'?'selected':''}}>Pending</option>
                            <option value="Process" {{$order->status=='Process'?'selected':''}}>Process</option>
                            <option value="Delivered" {{$order->status=='Delivered'?'selected':''}}>Delivered</option>
                            <option value="Cancel" {{$order->status=='Cancel'?'selected':''}}>Cancel</option>
                        </select>
                        @endif
                        @if (in_array($order->status,["Return Request","Return Process","Return Complete","Return Cancel"]))
                        <select name="status" class="form-control">
                            <option value="Return Request" {{$order->status=='Return Request'?'selected':''}}>Return Request</option>
                            <option value="Return Process" {{$order->status=='Return Process'?'selected':''}}>Return Process</option>
                            <option value="Return Complete" {{$order->status=='Return Complete'?'selected':''}}>Return Complete</option>
                            <option value="Return Cancel" {{$order->status=='Return Cancel'?'selected':''}}>Return Cancel</option>
                        </select>
                        @endif
                        <button type="submit" class="btn btn-product btn-product-cart add-cart"
                            onclick="return confirm('Are you sure?')">Update Status</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>

        </div>
</div>
</div>
@endsection
