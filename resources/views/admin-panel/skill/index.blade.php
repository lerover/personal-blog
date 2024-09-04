@extends('admin-panel/master')
@section('title', 'Admin Dashboard')
@section('content')
<div class="row">
    <h4 class="col-md-10">Skills</h4>
    <div class="col-md-2">
        <a href="{{url('admin/skills/create')}}" class="btn btn-primary btn-sm col-md-12">Add New +</a>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('successMsg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('successMsg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif

            @if (session()->has('delmsg'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session()->get('delmsg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Percent</th>
                        <th>Actions</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($skills as $skill)
                        <tr>
                            <td>{{$skill->id}}</td>
                            <td>{{$skill->name}}</td>
                            <td>{{$skill->percent}}%</td>
                            <td>
                                <form action="skills/{{$skill->id}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">

                                    @csrf
                                    <a href="skills/{{$skill->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{$skills->links("pagination::bootstrap-5")}}
</div>
@endsection