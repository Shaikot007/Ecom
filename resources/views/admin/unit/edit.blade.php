@extends('admin.master')

@section('title')
    Edit unit
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit unit form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="{{route('unit.update', ['id' => $unit->id])}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$unit->name}}" placeholder="Enter unit name" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unit description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Enter unit description" required>{{$unit->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publication status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$unit->status == 1 ? 'checked' : ''}} name="status" value="1"/> Published</label>
                                <label><input type="radio" {{$unit->status == 0 ? 'checked' : ''}} name="status" value="0"/> Unpublished</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Update unit info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
