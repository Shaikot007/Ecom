@extends('admin.master')

@section('title')
    Manage unit
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">All unit info goes here</div>
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
                                    <th class="text-center">Unit name</th>
                                    <th class="text-center">Unit description</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            @foreach($units as $unit)
                                <tbody>
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$unit->name}}</td>
                                        <td>{{$unit->description}}</td>
                                        <td>{{$unit->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success btn-xs" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('unitDeleteForm{{$unit->id}}').submit();" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <form action="{{route('unit.delete', ['id' => $unit->id])}}" method="post" id="unitDeleteForm{{$unit->id}}">
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
