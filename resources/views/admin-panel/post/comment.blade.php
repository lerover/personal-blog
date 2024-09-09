@extends('admin-panel/master')
@section('title', 'Post Comments')
@section('content')
<div class="row">
    <h4 class="col-md-10">Comments</h4>
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

                <tbody>
                    @if ($comments->count() <= 0)
                        {{"No comments here"}}
                    @else
                    @foreach ($comments as $comment)
                        <tr>
                            <td>
                                {{$comment->text}}
                            </td>
                            <td>
                                <form action={{url('admin/comment/'.$comment->id.'/show_hide')}} method="post">
                                    @csrf
                                        <button type="submit" href='' class="btn btn-sm
                                            {{$comment->status === 'show' ? 'btn-danger' : 'btn-success'}}
                                        ">
                                            {{$comment->status === 'show' ? 'Hide' : 'Show'}}
                                        </button>
                                    
                                    
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @endif

                    <tr>
                        <td>
                            <a href={{url('admin/posts')}} class="btn btn-secondary">Back</a>
                        </td>
                    </tr>
                </tbody>


            </table>
        </div>
    </div>

</div>
@endsection