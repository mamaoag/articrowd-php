@extends('master') @section('title') {{$job->title}} @endsection @section('content')
<section class="hero is-small is-dark is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">&nbsp; {{$job->position}}</h1>
            <p class="menu-label" style="color:#fff">&nbsp;&nbsp;&nbsp; {{$job->user->fname}} {{$job->user->lname}} by {{$job->created_at->diffForHumans()}}</p>
        </div>
    </div>
</section>
<div class="column is-11 offset-1">
    <div class="box">
        <div class="container">
            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="{{$job->user->image}}" style="height:64px">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{$job->user->fname}} {{$job->user->lname}}</strong> <small>{{'@'.$job->user->username}}</small>                            <small>{{$job->created_at->diffForHumans()}}</small>
                            <br> <small class="menu-label">PHP: {{$job->offer}}</small> <br> {{$job->description}}
                        </p>
                    </div>
                </div>
             </article>
        </div>
    </div>
</div>
<br>
<section class="section">
<nav class="level">
    <div class="level-left">
        <div class="level-item">
            <h1 class="subtitle">Action</h1>
        </div>
    </div>
    <div class="level-right">
        <a href="" class="level-item button is-outlined is-dark">Apply</a>
    </div>
</nav>
</section>
@endsection