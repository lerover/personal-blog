@extends('admin-panel/master')
@section('title','Create Project')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>Project Create Form</h5>
                <form action="{{url('admin/projects')}}" method="POST">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter project name">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group mt-5">
                        <label for="">URL</label>
                        <input type="text" name="url" id="" value="{{old('url')}}" class="form-control  @error('url') is-invalid @enderror" placeholder="Enter url">
                        @error('url')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('admin/projects')}}" class="btn btn-secondary ">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
