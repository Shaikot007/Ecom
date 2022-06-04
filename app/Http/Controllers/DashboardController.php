<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->user_type === "admin")
        {
            return view('admin.dashboard.dashboard', [
                'orders'        => Order::orderBy('id', 'desc')->take(20)->get(),
                'order_details' => OrderDetail::all()
            ]);
        }
        else {
            return view('front.home.home', [
                'brands'        => Brand::orderBy('id', 'desc')->get(),
                'categories'    => Category::all(),
                'products'      => Product::all(),
                'cart_items'    => Cart::content(),
                'cart_count'    => Cart::count(),
                'cart_total'    => Cart::total()
            ]);
        }
    }
}
