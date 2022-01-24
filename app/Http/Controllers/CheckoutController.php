<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Cart;
use Session;
use Mail;

class CheckoutController extends Controller
{
    private $customer;
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
            'cart_total'    => Cart::total()
        ]);
    }

    public function newOrder(Request $request)
    {
        $this->customer = new Customer();
        $this->customer->name     = $request->name;
        $this->customer->email    = $request->email;
        $this->customer->mobile   = $request->mobile;
        $this->customer->password = bcrypt($request->mobile);
        $this->customer->address  = $request->address;
        $this->customer->save();

        Session::put('customer_id', $this->customer->id);
        Session::put('name', $this->customer->name);

        $this->order = new Order();
        $this->order->customer_id       = $this->customer->id;
        $this->order->order_date        = date('Y-m-d');
        $this->order->order_timestamp   = strtotime(date('Y-m-d'));
        $this->order->order_total       = Session::get('total');
        $this->order->tax_total         = Session::get('tax');
        $this->order->delivery_address  = $request->address;
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

        Cart::destroy();

        /*==========email send==========*/

        $this->detail = [
            'title' => 'This is mail title',
            'body'  => 'This is mail body',
        ];

        Mail::to($this->customer->email)->send(new OrderMail($this->detail));

        /*==========email send==========*/

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
