@extends('admin.master')

@section('title')
    Edit customer
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit customer form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="{{route('customer.update', ['id' => $customer->id])}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$customer->name}}" placeholder="Enter customer name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" value="{{$customer->email}}" placeholder="Enter customer email"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer mobile</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="mobile" value="{{$customer->mobile}}" placeholder="Enter customer mobile"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" placeholder="Enter customer address">{{$customer->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Update customer info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
