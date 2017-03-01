@extends('master')

@section('title')
{{$user->fname}} {{$user->lname}}
@endsection

@section('content')
<section class="hero is-light is-bold">
    <div class="hero-body">
        <div class="container">
            <nav class="level">
                <div class="level-left"></div>
                <div class="level-center">
                    <div class="level-item has-text-centered">
                        <figure class="image is-128x128"><img src="{{$user->image}}" alt="" style="border-radius: 50%; border-style: solid; border-width: 3px; border-color:#fff; width:128px; height:128px;"></figure>
                    </div>
                    <div class="level-item"><br>
                    <br>
                    <h3 class="subtitle has-text-centered"><br>{{$user->fname}} {{$user->lname}} 
                        <span class="menu-label"><br><strong>{{'@'.$user->username}}</strong></span>
                    </h3>
                    </div>
                    @if($user->occupation OR $user->location)
                    <div class="level-item has-text-centered">
                        <p class="menu-label"><br>{{$user->occupation}}  {{$user->location}}</p>
                    </div>
                    @endif
                </div>
                <div class="level-right"></div>
            </nav>
        </div>
    </div>
</section>
<section class="section">
    <div class="columns">
        <div class="column">
            <h1 class="subtitle">Posts</h1>
            <div class="box">
                <div class="container">
                    <h2 class="menu-label">Recent Posts</h2>
                    <ul>
                    @foreach($posts as $post)
                        <li><a href="/post/{{$post->id}}">
                            <h1 class="subtitle">{{$post->title}} -  <small class="menu-label">{{$post->created_at->diffForHumans()}}</small></h1>
                        </a>
                            <p>{{str_limit($post->body,30)}}</p>
                        </li>
                        @if($posts->count() > 1)
                        <hr>
                        @endif
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="column is-4">
            <h1 class="subtitle">About {{$user->fname}} @if($user->id == Auth::user()->id)<span><small><a href="/u/{{Auth::user()->username}}/edit" class="underline">edit</a></small></span>@endif</h1>
            <div class="box">
                <div class="container">
                @if(!$user->bio)
                    This user has no bio
                @else
                    {{$user->bio}}
                @endif
                </div>
            </div>
            <h1 class="subtitle">Job Offerings</h1>
            <div class="box">
                <div class="container">
                    @if(\App\Job::where('client_id',$user->id)->count() == 0)
                    <p class="has-text-centered">No jobs posted by this user</p>
                    @else
                        <ul>
                        @foreach(\App\Job::where('client_id',$user->id)->get() as $job)
                        <li>
                            <nav class="level">
                                <div class="level-left">
                                    <a href="/job/{{$job->id}}"><h1 class="subtitle">{{$job->position}}</h1></a>
                                </div>
                                <div class="level-right">
                                    <p class="menu-label">Php {{$job->offer}}</p>
                                </div>
                            </nav>
                        </li>
                        @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection