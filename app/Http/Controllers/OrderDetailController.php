<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function invoice($id)
    {
        return view('admin.order.invoice', [
            'orders'         => Order::find($id),
            'order_details'  => OrderDetail::where('order_id', $id)->get()
        ]);
    }
}
