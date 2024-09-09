@extends('admin-panel/master')
@section('title','Post')
@section('content')
<div class="row">
    <h4 class="col-md-10">Posts</h4>
    <div class="col-md-2">
        <a href="{{url('admin/posts/create')}}" class="btn btn-primary btn-sm col-md-12">Add New +</a>
    </div>
</div>
<div class="container">
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
                        <th>Category</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($posts as $index=> $post)
                        <tr>
                            <td>{{$index + $posts->firstItem()}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>
                                <img src="{{asset('storage/post-image/'.$post->image)}}" alt="" width="100px">
                            </td>
                            <td>{{$post->title}}</td>
                            <td><textarea name="" id="" readonly>{{$post->content}}</textarea></td>
                            <td>
                            <form action="posts/{{$post->id}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">

                                    @csrf
                                    <a href="posts/{{$post->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                    <a href={{url('admin/posts/'.$post->id)}} class="btn btn-primary btn-sm">Comments</a>
                                    </form>
                            </td>
                        </tr>
                    @endforeach

                    {{$posts->links('pagination::bootstrap-5')}}
                </tbody>


            </table>
        </div>
    </div>

</div>
@endsection