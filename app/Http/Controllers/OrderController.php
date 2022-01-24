<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function manage()
    {
        return view('admin.order.manage', [
            'orders'     => Order::all()
        ]);
    }
}
