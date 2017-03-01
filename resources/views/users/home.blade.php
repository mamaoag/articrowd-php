@extends('master')

@section('title')
Home - Articrowd
@endsection

@section('content')
<section class="hero is-light is-medium is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-centered">Featured Content</h1>
            <h2 class="subtitle has-text-centered">Cool features</h2>
        </div>
    </div>
</section>


<section class="section">
    <h1 class="title">Featured</h1>
    <div class="columns">
        <div class="column">
            <div class="box">
            <p class="menu-label has-text-centered">THREAD</p>
            @if(\App\Post::count() == 0)
            <p class="has-text-centered">No threads Found</p>
            @else
            @foreach(\App\Post::latest()->limit(5)->get() as $post )
            <p><a href="">{{\App\Post::where('tags',$post->tag)->count() > 1? $data = \App\Post::where('tags',$post->tag)->first() : ''}}</a></p>
            @endforeach
            @endif
            </div>
        </div>
        <div class="column">
            <div class="box">
                <p class="menu-label has-text-centered">POST</p>
            @if(\App\Post::count() == 0)
            <p class="has-text-centered">No posts found</p>
            @else
            @foreach(\App\Post::latest()->limit(5)->get() as $post)
            <p><a href="/post/{{$post->id}}">{{$post->title}}</a></p>
            @endforeach
            @endif
            </div>
        </div>
        <div class="column">
            <div class="box">
                <p class="menu-label has-text-centered">IDEA</p>
                @if(\App\Idea::count() == 0)
                <p class="has-text-centered">No ideas found</p>
                @else
                @foreach(\App\Idea::latest()->limit(5)->get() as $idea)
                <p><a href="">{{$idea->title}}</a></p>
                @endforeach
                @endif
            </div>
        </div>
        <div class="column">
            <div class="box">
                <p class="menu-label has-text-centered">JOBS</p>
                @if(\App\Job::count() == 0)
                <p class="has-text-centered">No jobs found</p>
                @else
                @foreach(\App\Job::latest()->limit(5)->get() as $job)
                <p><a href="">{{$job->position}}</a></p>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<section class="section">
    <h1 class="title">Explore</h1>
    <div class="tile is-ancestor">
        <div class="tile is-parent is-4">
            <div class="tile is-child box">
                <div class="container">
                    <h1 class="subtitle">{{\App\Post::find(1)? \App\Post::find(1)->title : ''}}</h1>
                    <p>{{\App\Post::find(1)? \App\Post::find(1)->body : ''}}</p>
                    <nav class="level">
                        <div class="level-left"></div>
                        @if(\App\Post::find(1))
                        <div class="level-right"><a href="/post/{{\App\Post::find(1)->id}}" class="button is-dark is-medium level-item">View Post <i class="fa fa-arrow-circle-o-right fa-fw"></i></a></div>
                        @endif
                    </nav>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="menu-label">by {{\App\Post::find(1)? \App\Post::find(1)->users->fname : ''}} {{\App\Post::find(1)? \App\Post::find(1)->users->lname : ''}} - {{\App\Post::find(1)? \App\Post::find(1)->created_at->diffForHumans() : ''}}</p>
                </div>
            </div>
        </div>  
        <div class="tile">
            <div class="tile is-vertical is-parent">
                <div class="tile is-child box">
                    <div class="container">
                        <h1 class="subtitle">{{\App\Job::find(1)? \App\Job::find(1)->position : ''}}</h1>
                        <p>{{\App\Job::find(1)? \App\Job::find(1)->description : ''}}</p>
                        @if(\App\Job::find(1))
                        <nav class="level">
                            <div class="level-left"></div>
                            <div class="level-right"><a href="/job/{{\App\Job::find(1)->id}}" class="button is-dark is-medium level-item">View Job <i class="fa fa-arrow-circle-o-right fa-fw"></i></a></div>
                        </nav>
                        @endif
                        <p class="menu-label">by {{\App\Job::find(1)? \App\Job::find(1)->user->fname : ''}} {{\App\Job::find(1)? \App\Job::find(1)->user->lname : ''}} - {{\App\Job::find(1)? \App\Job::find(1)->created_at->diffForHumans() : ''}}</p>
                    </div>
                </div>
                <div class="tile is-child box">
                    <div class="container">
                        <h1 class="subtitle">{{\App\Post::find(3)? \App\Post::find(3)->title : ''}}</h1>
                        <p>{{\App\Post::find(3)? \App\Post::find(3)->body : ''}}</p>
                        @if(\App\Post::find(3))
                        <nav class="level">
                            <div class="level-left"></div>
                            <div class="level-right"><a href="http://" class="button is-dark is-medium level-item">View Post <i class="fa fa-arrow-circle-o-right fa-fw"></i></a></div>
                        </nav>
                        @endif
                        <p class="menu-label">by {{\App\Post::find(3)? \App\Post::find(3)->users->fname : ''}} {{\App\Post::find(3)? \App\Post::find(3)->users->lname : ''}} - {{\App\Post::find(3)? \App\Post::find(3)->created_at->diffForHumans() : ''}}</p>
                    </div>
                </div>
            </div>
            <div class="tile is-vertical is-parent">
                <div class="tile is-child box">
                    <div class="container">
                        <h1 class="subtitle">{{\App\Post::find(4)? \App\Post::find(4)->title : ''}}</h1>
                        <p>{{\App\Post::find(4)? \App\Post::find(4)->body : ''}}</p>
                        @if(\App\Post::find(4))
                        <nav class="level">
                            <div class="level-left"></div>
                            <div class="level-right"><a href="http://" class="button is-dark is-medium level-item">View Post <i class="fa fa-arrow-circle-o-right fa-fw"></i></a></div>
                        </nav>
                        @endif
                        <p class="menu-label">by {{\App\Post::find(4)? \App\Post::find(4)->users->fname : ''}} {{\App\Post::find(4)? \App\Post::find(4)->users->lname : ''}} - {{\App\Post::find(4)? \App\Post::find(4)->created_at->diffForHumans() : ''}}</p>
                    </div>
                </div>
                <div class="tile is-child box">
                    <div class="container">
                        <h1 class="subtitle">{{\App\Post::find(5)? \App\Post::find(5)->title : ''}}</h1>
                        <p>{{\App\Post::find(5)? \App\Post::find(5)->body : ''}}</p>
                        @if(\App\Post::find(5))
                        <nav class="level">
                            <div class="level-left"></div>
                            <div class="level-right"><a href="http://" class="button is-dark is-medium level-item">View Post <i class="fa fa-arrow-circle-o-right fa-fw"></i></a></div>
                        </nav>
                        @endif
                        <p class="menu-label">by {{\App\Post::find(5)? \App\Post::find(5)->users->fname : ''}} {{\App\Post::find(5)? \App\Post::find(5)->users->lname : ''}} - {{\App\Post::find(5)? \App\Post::find(5)->created_at->diffForHumans() : ''}}</p>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</section>

<section class="section">
    <h1 class="title">New Content</h1>
    <div class="columns">
        <div class="column">
            <div class="box">
                <div class="container"></div>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <div class="container"></div>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <div class="container"></div>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <div class="container"></div>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <div class="container"></div>
            </div>
        </div>
        <div class="column">
            <div class="box">
                <div class="container"></div>
            </div>
        </div>
    </div>
</section>
@endsection