@extends('admin.master')

@section('title')
    Manage brand
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">All brand info goes here</div>
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
                                    <th class="text-center">#</th>
                                    <th class="text-center">Brand name</th>
                                    <th class="text-center">Brand description</th>
                                    <th class="text-center">Brand image</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            @foreach($brands as $brand)
                                <tbody>
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$brand->name}}</td>
                                        <td>{{$brand->description}}</td>
                                        <td>
                                            <img src="{{asset($brand->image)}}" alt="Image" height="50" width="100"/>
                                        </td>
                                        <td>{{$brand->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-success btn-xs" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('brandDeleteForm{{$brand->id}}').submit();" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form action="{{route('brand.delete', ['id' => $brand->id])}}" method="post" id="brandDeleteForm{{$brand->id}}">
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
