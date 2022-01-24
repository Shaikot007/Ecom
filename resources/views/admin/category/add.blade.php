@extends('admin.master')

@section('title')
    Add new category
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Add category form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
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
                    <form class="form-horizontal" action="{{route('category.new')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" placeholder="Enter category name"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Enter category description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category image</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="image" accept="image/*"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="status" value="1" checked/> Published</label>
                                <label><input type="radio" name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Create new category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
