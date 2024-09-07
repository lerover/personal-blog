@extends('admin-panel/master')
@section('title', 'Edit Projects')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5>Skill Edit</h5>
            <form action="{{url('admin/categories/'.$category->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @csrf
                <div class="form-group mt-5">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter project name" value="{{ $category->name}}">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

            

                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{url('admin/categories')}}" class="btn btn-secondary ">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection