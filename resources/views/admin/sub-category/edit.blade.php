@extends('admin.master')

@section('title')
    Edit sub category
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit sub category form</div>
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
                    <form class="form-horizontal" action="{{route('subcategory.update', ['id' => $subCategory->id])}}"
                          method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category name</label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control">
                                    <option value="" disabled selected> -- Select category name --</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{$category->id == $subCategory->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sub category name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$subCategory->name}}" placeholder="Enter sub category name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sub category description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description"
                                          placeholder="Enter sub category description">{{$subCategory->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sub category image</label>
                            <div class="col-sm-10">
                                <img src="{{asset($subCategory->image)}}" alt="Image" height="100" width="150" />
                                <input class="form-control-file" type="file" name="image" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$subCategory->status == 1 ? 'checked' : ''}} name="status" value="1"/> Published</label>
                                <label><input type="radio" {{$subCategory->status == 0 ? 'checked' : ''}} name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Update sub category info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
