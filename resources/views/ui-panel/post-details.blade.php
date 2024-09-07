@extends('ui-panel/master')           
@section('title', 'Personal Blog')
@section('content')     

                
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 post-details">
                            <img src={{asset('storage/post-image/'.$post->image)}} alt="" width="100%">
                            <br><br>
                            <small> 
                                <strong> 
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    Posted On:
                                </strong>
                                    {{date("d-M-Y",strtotime($post->created_at))}}
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
                                @if($likestatus)    
                                @if($likestatus->type === 'like')
                                        disabled
                                    @endif
                                    @endif
                                >
                                    <i class="far fa-thumbs-up"></i> Like <span>{{$likes->count()}}</span>
                                </button>
                                <button type="submit" formaction="{{url("/post/dislike")}}" class="btn btn-sm btn-danger like"
@if($likestatus)
@if($likestatus->type === 'dislike')
                                        disabled
                                    @endif
@endif
                                >
                                    <i class="far fa-thumbs-down"></i> Disike <span>{{$dislikes->count()}}</span>
                                </button>
                                <button type="button" class="btn btn-sm btn-info comment" data-toggle="collapse" data-target="#collapseExample">
                                    <i class="far fa-comment"></i> Comment <span>3</span>
                                </button>
                            </form>
                            <br>
                            <div class="comment-form">
                                <div class="collapse" id="collapseExample">
                                    <form action="">
                                        <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="3"></textarea>
                                            <br>
                                            <button class="btn btn-primary btn-sm">
                                                <i class="far fa-paper-plane"></i> Submit
                                            </button>
                                        </div>
                                    </form>
                                    <br>
                                    <div class="comment-show">
                                        <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="" width="30px"> John 
                                        <div class=" comment-box mt-2">
                                            great post sir. pls keep up the good work
                                        </div>
                                    </div>
                                    <br>
                                    <div class="comment-show">
                                        <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="" width="30px"> Jenifer 
                                        <div class=" comment-box mt-2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum illum aspernatur quod non. Inventore natus dolorum autem dicta porro quis rem reprehenderit, magni harum corrupti nisi sequi ea omnis recusandae.
                                        </div>
                                    </div>
                                    <br>
                                    <div class="comment-show">
                                        <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" alt="" width="30px"> Willian Jam 
                                        <div class=" comment-box mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus quia aspernatur quibusdam ad corrupti.
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection