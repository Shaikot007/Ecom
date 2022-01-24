@extends('admin.master')

@section('title')
    Edit brand
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit brand form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="{{route('brand.update', ['id' => $brand->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brand name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$brand->name}}" placeholder="Enter brand name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brand description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Enter brand description">{{$brand->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Brand image</label>
                            <div class="col-sm-10">
                                <img src="{{asset($brand->image)}}" alt="Image" height="100" width="150" />
                                <input class="form-control-file" type="file" name="image" accept="image/*" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$brand->status == 1 ? 'checked' : ''}} name="status" value="1" /> Published</label>
                                <label><input type="radio" {{$brand->status == 0 ? 'checked' : ''}} name="status" value="0" /> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Update brand info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
