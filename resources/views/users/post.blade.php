@extends('master') @section('title') {{$post->title}} @endsection @section('content')
<section class="hero is-small is-dark is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">&nbsp; {{$post->title}}</h1>
            <p class="menu-label" style="color:#fff">&nbsp;&nbsp;&nbsp; {{$post->users->fname}} {{$post->users->lname}} by {{$post->created_at->diffForHumans()}}</p>
        </div>
    </div>
</section>
<div class="column is-11 offset-1">
    <div class="box">
        <div class="container">
            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="{{$post->users->image}}" style="height:64px">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{$post->users->fname}} {{$post->users->lname}}</strong> <small>{{'@'.$post->users->username}}</small>                            <small>{{$post->created_at->diffForHumans()}}</small>
                            <br> {{$post->body}}
                        </p>
                    </div>
                </div>
             </article>
        </div>
    </div>
</div>
<section class="section">
    <h1 class="menu-label">Replies</h1>

    <div class="column is-11 offset-1">
    @foreach($post->comments as $comment)
        <div class="box">
            <div class="container">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <img src="{{$comment->user->image}}" style="height:64px">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>{{$comment->user->fname}} {{$comment->user->lname}}</strong> <small>{{'@'.$comment->user->username}}</small>                            <small>{{$comment->created_at->diffForHumans()}}</small>
                                <br> {{$comment->body}}
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        @endforeach
    </div>
</section>
<section class="section">
    <hr>
    <form action="/post/{{Request::segment(2)}}/comment" method="POST">
        <article class="media">
            <figure class="media-left">
                <p class="image is-64x64"><img src="{{Auth::user()->image}}" alt=""></p>
            </figure>
            <div class="media-content">
                <p class="control"><textarea name="body" id="body" cols="30" rows="10" class="textarea" placeholder="Reply here..."></textarea></p>
                <nav class="level">
                    <div class="level-left"><button type="submit" class="button is-dark">Post Reply</button></div>
                </nav>
            </div>
        </article>
       {{csrf_field()}}
    </form>
</section>
@endsection