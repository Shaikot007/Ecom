@extends('admin.master')

@section('title')
    Order details
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">All order details info goes here</div>
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
                                    <th class="text-center">Product name</th>
                                    <th class="text-center">Product price</th>
                                    <th class="text-center">Product quantity</th>
                                </tr>
                            </thead>
                            @foreach($order_details as $details)
                                <tbody>
                                    <tr>
                                        <td>{{$orders->order_timestamp}}</td>
                                        <td>{{$details->orderProduct->name}}</td>
                                        <td>{{$details->product_price}}</td>
                                        <td>{{$details->product_quantity}}</td>
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
