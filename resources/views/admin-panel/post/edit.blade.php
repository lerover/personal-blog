@extends('admin-panel/master')
@section('title','Create Post')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h5>Post Edit</h5>
                <form action="{{url('admin/posts/'.$post->id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
    
                @csrf

                    <div class="form-group mt-5">
                        <label for="">Category</label>
                        <select type="text" name="category" id="" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="Enter post title">
                            <option value="" selected disabled>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}"
                                    {{$category->id === $post->category_id ? "selected" : ""}}
                                >{{$category->name}}</option>
                            @endforeach
                        </select>

                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                                        
                    <div class="form-group mt-5">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" value="{{$post->image}}" class="form-control @error('image') is-invalid @enderror" placeholder="Enter category name">
                        <img src="{{asset('storage/post-image/'.$post->image)}}" alt="" width="150px">
                        @error('image')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group mt-5">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" value="{{old('title')??$post->title}}" class="form-control @error('title') is-invalid @enderror" placeholder="Enter post title">
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                    <div class="form-group mt-5">
                        <label for="">Content</label>
                        <textarea type="text" name="content" id="" value="" rows="5" class="form-control @error('content') is-invalid @enderror" placeholder="Enter post title">{{old('content') ?? $post->content}}</textarea>
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
