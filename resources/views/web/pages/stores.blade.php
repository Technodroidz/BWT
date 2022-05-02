@extends('web.welcome')


@section('title','My Boutique')

@section('content')

<div class="wrap-height"><br/>
    <div class="row form-group">
        <div class="col-md-6">
             <a href="{{route('product.create')}}" class="btn btn-success">Add New Product</a>
        </div>
        <div class="col-md-6 text-right">
            <button onclick="goBack()" class="btn btn-success back-btn"><i class="fa fa-chevron-left"></i> Go Back</button>
        </div>
    </div>
	<hr>
	@php
		$boutique = auth()->guard('web_user')->user()->boutique??new \App\Boutique();
	@endphp
	@if ($boutique)
	<div class="card" id="">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="shop_img">
					<a href="{{ url('/my-product')}}" style="float: left;">
						<img class="img-responsive" src="{{$boutique->image_url}}" style="width: 100px; ">

					</a>
					<h2 style="
    float: left;
    line-height: 67px;
    margin-bottom: 0px;
    margin-left: 16px;">{{$boutique->name}}</h2>
				</div>
			</div>

		</div>
	</div>
	<div class="wrap-height top30">
        @forelse (auth()->guard('web_user')->user()->orders??[] as $order)
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

                            <a href="{{URL::signedRoute('boutique-order.show',$order->id)}}"
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
	@else
	<div class="card" id="card-new">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="shop_img">
				<img class="img-responsive" src="https://www.kindpng.com/picc/m/27-276396_magento-store-b2bmage-shopping-spree-shopping-cartoon-hd.png">
				</div>
			</div>
			<div class="col-md-6 col-xs-12 form-group text-center">
				<div class="shop_txt">
					<h2>My Boutique</h2>
					<a href="{{route('boutique.create')}}" class="btn btn-success">Create Now</a>
				</div>
			</div>
		</div>
	</div>
	@endif

</div>


@endsection
