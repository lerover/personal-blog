@extends('admin-panel/master')
@section('title','skill create')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>Skill Create Form</h5>
                <form action="{{url('admin/skills')}}" method="post">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter skill name">
                        @error('name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group mt-5">
                        <label for="">Percent</label>
                        <input type="text" name="percent" id="" value="{{old('percent')}}" class="form-control  @error('percent') is-invalid @enderror" placeholder="Enter skill percent">
                        @error('percent')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('admin/skills/')}}" class="btn btn-secondary ">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection