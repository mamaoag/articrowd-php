@extends('master')

@section('title')
Search Results
@endsection

@section('content')
<div class="container">
    <section class="section">
        <div class="box">
            <div class="container">
                <h1 class="title">Search</h1>
                <form action="/search" method="GET">
                    <p class="control has-addons"><input type="text" name="search" class="input" placeholder="Search" value="{{$title}}"><button class="button is-dark">Search</button></p>
                    <label for="" class="label"></label>
                            </select></span></p>
                    {{csrf_field()}}
                </form>
                <nav class="level">
                    <div class="level-left">
                        <small for="" class="label level-item">Sort by:</small>
                        <a href="/search?search={{$title}}&filter=recent&_token={{csrf_token()}}" class="level-item"><small>Recent</small></a>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <br><br>
    @if($posts->count() == 0 && $jobs->count() == 0 && $ideas->count() == 0)
        <h1 class="title has-text-centered">No results</h1>
    @endif
    @if(!$posts->count() == 0)
    <section class="section">
        <div class="box">
            <div class="container">
                <h1 class="subtitle">Posts</h1>
                <section class="section">
                    @foreach($posts as $post)
                        <h1 class="title"><a href="/post/{{$post->id}}">{{str_limit($post->title,25)}}</a></h1>
                        <p>{{str_limit($post->body,30)}}</p>
                        @if($posts->count() > 1)<hr>@endif
                    @endforeach
                </section>
            </div>
        </div>
        @endif
        @if(!$jobs->count() == 0)
        <div class="box">
            <div class="container">
                <h1 class="subtitle">Jobs</h1>
                <section class="section">
                    @foreach($jobs as $job)
                        <h1 class="title"><a href="/job/{{$job->id}}">{{str_limit($job->position,25)}}</a></h1>
                        <p>{{str_limit($job->description,30)}}</p>
                        @if($jobs->count() > 1)<hr>@endif
                    @endforeach
                </section>
            </div>
            </div>
        @endif
        @if(!$ideas->count() == 0 )
        <div class="box">
            <div class="container">
                <h1 class="subtitle">Ideas</h1>
                <section class="section">
                    @foreach($ideas as $idea)
                        <h1 class="title"><a href="">{{str_limit($idea->title,25)}}</a></h1>
                        <p>{{str_limit($idea->body,30)}}</p>
                        @if($ideas->count() > 1) <hr> @endif
                    @endforeach
                </section>
            </div>
        </div>
        @endif
    </section>
</div>
@endsection