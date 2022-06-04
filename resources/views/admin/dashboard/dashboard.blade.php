@extends('admin.master')

@section('title')
    Dashboard
@endsection

@section('body')
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Latest Orders</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">Order id</th>
                                    <th class="text-center">Customer name</th>
                                    <th class="text-center">Total price</th>
                                    <th class="text-center">Payment status</th>
                                    <th class="text-center">Delivery status</th>
                                    <th class="text-center">Order date</th>
                                    <th class="text-center">Invoice</th>
                                </tr>
                            </thead>
                            @foreach($orders as $order)
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{$order->order_timestamp}}</td>
                                        <td class="text-center">{{$order->customer->name}}</td>
                                        <td class="text-center">৳ {{$order->order_total}}</td>
                                        <td class="text-center">
                                            <span class="badge badge-warning">{{$order->payment_status}}</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge badge-info">{{$order->delivery_status}}</span>
                                        </td>
                                        <td class="text-center">{{$order->order_date}}</td>
                                        <td class="text-center">
                                            <a href="{{route('invoice', ['id' => $order->id])}}" class="btn btn-primary btn-xs" title="Invoice">
                                                <i class="fa fa-sticky-note"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
