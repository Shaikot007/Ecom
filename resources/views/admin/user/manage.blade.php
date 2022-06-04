@extends('admin.master')

@section('title')
    Manage user
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">All user info goes here</div>
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
                                    <th class="text-center">User name</th>
                                    <th class="text-center">User email</th>
                                    <th class="text-center">User phone number</th>
                                    <th class="text-center">User address</th>
                                    <th class="text-center">User type</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            @foreach($users as $user)
                                <tbody>
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->phone_number}}</td>
                                        <td>{{$user->address}}</td>
                                        <td style="text-transform: capitalize">{{$user->user_type}}</td>
                                        <td>
                                            <a href="{{route('user.edit', ['id' => $user->id])}}" class="btn btn-success btn-xs" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            @if($user->user_type !== 'admin')
                                                <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('userDeleteForm{{$user->id}}').submit();" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                <form action="{{route('user.delete', ['id' => $user->id])}}" method="post" id="userDeleteForm{{$user->id}}">
                                                    @csrf
                                                </form>
                                            @endif
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
