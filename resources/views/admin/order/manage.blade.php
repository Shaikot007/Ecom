@extends('admin.master')

@section('title')
    Manage order
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">All order info goes here</div>
                    </div>
                    <div class="ibox-body">
                        @if($message = Session::get('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{$message}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover text-center" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">Order id</th>
                                    <th class="text-center">Customer name</th>
                                    <th class="text-center">Customer email</th>
                                    <th class="text-center">Delivery address</th>
                                    <th class="text-center">Order date</th>
                                    <th class="text-center">Total tax</th>
                                    <th class="text-center">Total price</th>
                                    <th class="text-center">Payment status</th>
                                    <th class="text-center">Delivery status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            @foreach($orders as $order)
                                <tbody>
                                    <tr>
                                        <td>{{$order->order_timestamp}}</td>
                                        <td>{{$order->customer->name}}</td>
                                        <td>{{$order->customer->email}}</td>
                                        <td>{{$order->customer->address}}</td>
                                        <td>{{$order->order_date}}</td>
                                        <td>৳ {{$order->tax_total}}</td>
                                        <td>৳ {{$order->order_total}}</td>
                                        <td>{{$order->payment_status}}</td>
                                        <td>{{$order->delivery_status}}</td>
                                        <td>
                                            <a href="{{route('order.details', ['id' => $order->id])}}" class="btn btn-primary btn-xs" title="Order detail">
                                                <i class="fa fa-search-plus"></i>
                                            </a>
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
