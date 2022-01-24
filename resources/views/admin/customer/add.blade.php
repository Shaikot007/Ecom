@extends('admin.master')

@section('title')
    Add new customer
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Add customer form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
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
                    <form class="form-horizontal" action="{{route('customer.new')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" placeholder="Enter customer name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" placeholder="Enter customer description"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer mobile</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="mobile" placeholder="Enter customer mobile number"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" placeholder="Enter customer address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Create new customer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
