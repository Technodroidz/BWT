<?php

namespace App\Http\Controllers;

use App\Address;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::session(auth()->Id())->getContent();
        return view('web.pages.checkout',compact('items'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_id'=>'required',
        ]);
        $product = Product::findOrFail($request->product_id);
        Cart::session(auth()->Id())->add(array(
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->price,
            'quantity' => $request->quantity??1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        if($request->ajax()){
            return response()->json(['message'=>'Product added in cart succesfully!']);
        }

        return back()->withSuccess('Product added in cart succesfully');
    }

    public function update(Request $request)
    {
        $request->validate([
            'product_id'=>'required',
        ]);
        Cart::session(auth()->Id())->update($request->product_id,[
            'quantity' => $request->quantity
        ]);
    }

    public function remove(Request $request)
    {
        $request->validate([
            'product_id'=>'required',
        ]);
        Cart::session(auth()->Id())->remove($request->product_id);

        if($request->ajax()){
            return response()->json(['message'=>'Product remove from cart succesfully!']);
        }

        return back()->withSuccess('Product remove from cart succesfully');
    }

    public function addWishlist(Product $product)
    {
        $wish_list = app('wishlist');
        $wish_list->add(array(
            'id' => $product->id,
            'name' => $product->product_name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return back();
    }

    public function removeWishlist(Product $product)
    {
        app('wishlist')->remove($product->id);
        return back();
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'address_id'=>'required|exists:addresses,id'
        ]);

        $items = Cart::session(auth()->Id())->getContent();
        $user = auth()->user();
        $address = Address::find($request->address_id);
        foreach($items as $item){
            $product = $item->associatedModel;
            $order = new Order();
            $order->user_id = $user->id;
            $order->address_id = $request->address_id;
            $order->address = $address->toArray();
            $order->name = $user->name;
            $order->email = $user->email;
            $order->phone = $user->phone;
            $order->price = $item->price;
            $order->seller_id=$product->seller_id;
            $order->seller_name=optional($product->seller)->name;
            $order->seller_email=optional($product->seller)->email;
            $order->seller_phone=optional($product->seller)->phone;
            $order->product_name=$item->name;
            $order->product_image=$product->image;
            $order->shipping = 0;
            $order->sub_total = $order->price +  $order->shipping;
            $order->save();
            $order->orderID = 'BWT-'.str_pad($order->id,5,0,STR_PAD_LEFT);
            $order->save();
        }

        Cart::session($user->id)->clear();
        return redirect()->route('order-success')->withSuccess('Order placed successfully!');
    }

    public function orderSuccess()
    {
        return view('web.pages.order-success');
    }


    public  function myorder(){
        $orders= order::paginate(10);
        return view('web.pages.myorder',compact('orders'));
    }

    public function myorderShow(Order $order)
    {
        return view('web.pages.myorder-show',compact('order'));
    }

    public function boutiqueOrderShow(Order $order)
    {
        return view('web.pages.boutique-order-show',compact('order'));
    }

    public function myorderCancel(Order $order)
    {
        $order->status = 'Cancel';
        $order->save();
        return back()->withSuccess('Order Cancel successfully!');
    }

    public function myorderReturn(Order $order)
    {
        $order->status = 'Return Request';
        $order->save();
        return back()->withSuccess('Order Cancel successfully!');
    }

    public function boutiqueOrderUpdate(Request $request,Order $order)
    {

        $order->status = $request->status;
        $order->save();
        return back()->withSuccess('Order status update successfully!');
    }


}
