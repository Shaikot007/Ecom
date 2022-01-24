@extends('admin.master')

@section('title')
    Manage customer
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">All customer info goes here</div>
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
                                <th class="text-center">Customer mobile</th>
                                <th class="text-center">Customer address</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            @foreach($customers as $customer)
                                <tbody>
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->mobile}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td>
                                        <a href="{{route('customer.edit', ['id' => $customer->id])}}"
                                           class="btn btn-success btn-xs">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-xs"
                                           onclick="event.preventDefault(); document.getElementById('customerDeleteForm{{$customer->id}}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form action="{{route('customer.delete', ['id' => $customer->id])}}"
                                              method="post" id="customerDeleteForm{{$customer->id}}">
                                            @csrf
                                        </form>
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
