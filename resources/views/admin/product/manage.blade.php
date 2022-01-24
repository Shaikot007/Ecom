@extends('admin.master')

@section('title')
    Manage product
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">All product info goes here</div>
                </div>
                <div class="ibox-body">
                    @if($message = Session::get('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{$message}}!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover text-center" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Category name</th>
                            <th class="text-center">Sub category name</th>
                            <th class="text-center">Brand name</th>
                            <th class="text-center">Unit name</th>
                            <th class="text-center">Product name</th>
                            <th class="text-center">Product code</th>
                            <th class="text-center">Product image</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->subCategory->name}}</td>
                                <td>{{$product->brand->name}}</td>
                                <td>{{$product->unit->name}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->code}}</td>
                                <td>
                                    <img src="{{asset($product->image)}}" alt="" height="70" width="100"/>
                                </td>
                                <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('subcategoryDeleteForm{{$product->id}}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{route('product.delete', ['id' => $product->id])}}" method="post" id="subcategoryDeleteForm{{$product->id}}">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
