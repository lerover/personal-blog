@extends('admin-panel/master')
@section('title','Create Post')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>Post Create Form</h5>
                <form action="{{url('admin/posts')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mt-5">
                        <label for="">Category</label>
                        <select  name="category"  class="form-control @error('category') is-invalid @enderror" placeholder="Enter post title">
                        <option value="" selected disabled>Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                        @error('category')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                                        
                    <div class="form-group mt-5">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" value="{{old('image')}}" class="form-control @error('image') is-invalid @enderror" placeholder="Enter category name">
                        @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group mt-5">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="Enter post title">
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group mt-5">
                        <label for="">Content</label>
                        <textarea type="text" name="content" id="" value="{{old('content')}}" rows="5" class="form-control @error('content') is-invalid @enderror" placeholder="Enter post title">{{old('content')}}</textarea>
                        @error('content')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>


                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('admin/posts')}}" class="btn btn-secondary ">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
