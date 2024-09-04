@extends('admin-panel/master')
@section('title','Admin Dashboard')
@section('content')
<div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    @if (session()->has('successMsg'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{session()->get('successMsg')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>

                                    @endif
                                    <table class="table table-bordered table-hover mt-3">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>

                                            @foreach ($users as $user)


                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->status}}</td>
                                                    <td>

                                                        <form action="{{url('/admin/users/'.$user->id.'/delete')}}" method="post">
                                                            @csrf
                                                            <a href="{{url('/admin/users/' . $user->id . '/edit')}}"
                                                                class="btn btn-success btn-sm">Edit</a>
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="confirm('Are you sure you want to delete?')">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection