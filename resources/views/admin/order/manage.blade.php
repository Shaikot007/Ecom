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
                        <table class="table table-striped table-bordered table-hover text-center" id="example-table"
                               cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Customer name</th>
                                    <th class="text-center">Customer email</th>
                                    <th class="text-center">Delivery address</th>
                                    <th class="text-center">Order date</th>

                                    {{--===================Need to relation=========================--}}
                                    <th class="text-center">Product name</th>
                                    <th class="text-center">Product quantity</th>
                                    {{--===================Need to relation=========================--}}

                                    <th class="text-center">Total price</th>
                                    <th class="text-center">Payment status</th>
                                    <th class="text-center">Delivery status</th>
                                </tr>
                            </thead>
                            @foreach($orders as $order)
                                <tbody>
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$order->customer->name}}</td>
                                        <td>{{$order->customer->email}}</td>
                                        <td>{{$order->customer->address}}</td>
                                        <td>{{$order->order_date}}</td>

                                        {{--===================Need to relation=========================--}}
                                        <td>{{$order->orderDetail->product_id}}</td>
                                        <td>{{$order->orderDetail->product_quantity}}</td>
                                        {{--===================Need to relation=========================--}}

                                        <td>৳ {{$order->order_total}}</td>
                                        <td>{{$order->payment_status}}</td>
                                        <td>{{$order->delivery_status}}</td>
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
