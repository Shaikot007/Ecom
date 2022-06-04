@extends('admin.master')

@section('title')
    Edit category
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit category form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="{{route('category.update', ['id' => $category->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category name</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="{{$category->name}}" type="text" name="name" placeholder="Enter category name" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Enter category description" required>{{$category->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category image</label>
                            <div class="col-sm-10">
                                <img src="{{asset($category->image)}}" alt="" height="100" width="150"/>
                                <input class="form-control-file" type="file" name="image" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$category->status == 1 ? 'checked' : '' }} name="status" value="1"/> Published</label>
                                <label><input type="radio" {{$category->status == 0 ? 'checked' : '' }} name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Update category info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
