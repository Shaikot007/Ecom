<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manage()
    {
        return view('admin.order.manage', [
            'orders'        => Order::all(),
            'order_details' => OrderDetail::all()
        ]);
    }

    public function details($id)
    {
        return view('admin.order.details', [
            'orders'         => Order::find($id),
            'order_details'  => OrderDetail::where('order_id', $id)->get()
        ]);
    }
}
