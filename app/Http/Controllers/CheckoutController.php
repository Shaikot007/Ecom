<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Session;
use Mail;
use DateTime;
use DateTimeZone;

class CheckoutController extends Controller
{
    private $user;
    private $order;
    private $orderDetail;
    private $cartProducts;
    private $detail = [];

    public function index()
    {
        return view('front.checkout.checkout', [
            'categories'    => Category::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_subtotal' => Cart::subtotal(),
            'cart_tax'      => Cart::tax(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function newOrder(Request $request)
    {

        $this->user = Auth::user();

        Session::put('customer_id', $this->user->id);
        Session::put('name', $this->user->name);

        $this->order = new Order();
        $date = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
        $this->order->customer_id       = $this->user->id;
        $this->order->order_date        = $date->format('F j, Y g:i:s a');
        $this->order->order_timestamp   = strtotime($date->format('Y-m-d H:i:s.v'));
        $this->order->order_sub_total   = Cart::subtotal();
        $this->order->tax_total         = Cart::tax();
        $this->order->order_total       = Cart::total();
        $this->order->delivery_address  = $this->user->address;
        $this->order->save();

        $this->cartProducts = Cart::content();
        foreach ($this->cartProducts as $cartProduct)
        {
            $this->orderDetail = new OrderDetail();
            $this->orderDetail->order_id            = $this->order->id;
            $this->orderDetail->product_id          = $cartProduct->id;
            $this->orderDetail->product_price       = $cartProduct->price;
            $this->orderDetail->product_quantity    = $cartProduct->qty;
            $this->orderDetail->save();
        }

        /*==========email send==========*/

        $this->detail = [
            'order_id'          => $this->order->order_timestamp,
            'cart_count'        => Cart::count(),
            'cart_subtotal'     => Cart::subtotal(),
            'cart_tax'          => Cart::tax(),
            'cart_total'        => Cart::total(),
            'delivery_address'  => $this->order->delivery_address,
            'delivery_date'     => $this->order->order_date
        ];

        Mail::to($this->user->email)->send(new OrderMail($this->detail));

        /*==========email send==========*/

        Cart::destroy();

        return redirect('/complete-order')->with('message', 'Your order info submit successfully. Please wait we will contact with you soon.');
    }

    public function completeOrder()
    {
        return view('customer.order.complete-order', [
            'categories' => Category::all(),
            'cart_items'    => Cart::content(),
            'cart_count'    => Cart::count(),
            'cart_total'    => Cart::total()
        ]);
    }

    public function customerLogout()
    {
        Session::forget('customer_id');
        Session::forget('name');

        return redirect('/');
    }
}
