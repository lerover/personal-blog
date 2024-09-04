@extends('admin-panel/master')
@section('title', 'Edit Projects')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5>Skill Edit</h5>
            <form action="{{url('admin/projects/'.$project->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @csrf
                <div class="form-group mt-5">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter project name" value="{{$project->name}}">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group mt-5">
                    <label for="">Url</label>
                    <input type="text" name="url" id="" class="form-control @error('percent') is-invalid @enderror"
                        placeholder="Enter url" value="{{$project->url}}">
                    @error('percent')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{url('admin/projects/')}}" class="btn btn-secondary ">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection