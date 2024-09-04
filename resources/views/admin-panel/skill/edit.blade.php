@extends('admin-panel/master')
@section('title', 'Edit')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5>Skill Edit</h5>
            <form action="{{url('admin/skills/' . $skill->id)}}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @csrf
                <div class="form-group mt-5">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Enter skill name" value="{{$skill->name}}">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group mt-5">
                    <label for="">Percent</label>
                    <input type="text" name="percent" id="" class="form-control @error('percent') is-invalid @enderror"
                        placeholder="Enter skill percent" value="{{$skill->percent}}">
                    @error('percent')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="mt-5">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{url('admin/skills/')}}" class="btn btn-secondary ">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection