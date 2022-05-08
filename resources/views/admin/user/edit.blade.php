@extends('admin.master')

@section('title')
    Edit user
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Edit user form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <form class="form-horizontal" action="{{route('user.update', ['id' => $user->id])}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">User name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$user->name}}" placeholder="Enter user name" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">User email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" value="{{$user->email}}" placeholder="Enter user email" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">User phone number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="phone_number" value="{{$user->phone_number}}" placeholder="Enter user phone number" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">User address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" placeholder="Enter user address" required>{{$user->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">User type</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="user_type" value="{{$user->user_type}}" placeholder="Enter user type" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Update user info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
