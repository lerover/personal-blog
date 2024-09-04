@extends('admin-panel/master')
@section('title','Edit')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h5>Edit User</h5>
            <form action="{{url('admin/users/' . $user->id . '/update')}}" method="post">
                @csrf
                <div class="form-group mt-5">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group mt-5">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="form-group mt-5">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="admin" @if ($user->status == 'admin') selected @endif>Admin</option>
                        <option value="user" @if ($user->status == 'user') selected @endif>User</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-5">Update</button>
                <a href="{{url('admin/users')}}" class="btn btn-secondary mt-5">Back</a>
            </form>
        </div>
    </div>
</div>
@endsection