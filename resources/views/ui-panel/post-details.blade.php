@extends('ui-panel/master')           
@section('title', 'Personal Blog')
@section('content')     


<div class="container">
    <div class="row">
        <div class="col-md-12 post-details">
            <img src={{asset('storage/post-image/' . $post->image)}} alt="" width="100%">
            <br><br>
            <small>
                <strong>
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    Posted On:
                </strong>
                {{date("d-M-Y", strtotime($post->created_at))}}
            </small>

            <br>
            <small>
                <strong>
                    <i class="fa fa-list"></i> Category:
                </strong>
                {{$post->category->name}}
            </small>
            <br><br>
            <h5><strong>{{$post->title}}</strong></h5>
            <p style="text-align: justify;">
                {{$post->content}}
            </p>
            <form method="post">
                @csrf
                <input type="hidden" name="post_id" value={{$post->id}}>
                <button type="submit" formaction="{{url("/post/like")}}" class="btn btn-sm btn-success like"
                    @if($likestatus) @if($likestatus->type === 'like') disabled @endif @endif>
                    <i class="far fa-thumbs-up"></i> Like <span>{{$likes->count()}}</span>
                </button>
                <button type="submit" formaction="{{url("/post/dislike")}}" class="btn btn-sm btn-danger like"
                    @if($likestatus) @if($likestatus->type === 'dislike') disabled @endif @endif>
                    <i class="far fa-thumbs-down"></i> Disike <span>{{$dislikes->count()}}</span>
                </button>
                <button type="button" class="btn btn-sm btn-info comment" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample">
                    <i class="far fa-comment"></i> Comment <span>{{$comments->count()}}</span>
                </button>
            </form>
            <br>
            <div class="comment-form">
                <div class="collapse" id="collapseExample">
                    <form action="{{'/post/comment'}}" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value={{$post->id}}>
                        <div class="form-group">
                            <textarea name="text" id="" cols="30" rows="3" class="form-control @error('text') is-invalid @enderror "></textarea>
                            <br>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="far fa-paper-plane"></i> Submit
                            </button>
                        </div>
                    </form>
                    <br>

                    @foreach ($comments as $comment)
                    <div class="comment-show mt-3">
                        <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="" width="30px">
                        {{$comment->user->name}}
                        <div class=" comment-box mt-2">
                            {{$comment->text}}
                        </div>
                    </div>
                    @endforeach
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection