@extends('admin.master')

@section('title')
    Manage sub category
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">All sub category info goes here</div>
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
                                <th class="text-center">Sub category description</th>
                                <th class="text-center">Sub category image</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subCategories as $subCategory)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$subCategory->category->name}}</td>
                                    <td>{{$subCategory->name}}</td>
                                    <td>{{$subCategory->description}}</td>
                                    <td>
                                        <img src="{{asset($subCategory->image)}}" alt="" height="70" width="100"/>
                                    </td>
                                    <td>{{$subCategory->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('subcategory.edit', ['id' => $subCategory->id])}}" class="btn btn-success btn-xs" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('subcategoryDeleteForm{{$subCategory->id}}').submit();" title="Delete">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form action="{{route('subcategory.delete', ['id' => $subCategory->id])}}" method="post" id="subcategoryDeleteForm{{$subCategory->id}}">
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
