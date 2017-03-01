@extends('master')
@section('title')
Jobs - Articrowd
@endsection
@section('content')
<div class="container column">
    <section class="section">
        <h1 class="title">Jobs</h1>
        <nav class="level">
            <div class="level-left"></div>
            <div class="level-right"><a href="" class="button is-dark is-outlined">Create Job</a></div>
        </nav>
    </section>
    <div class="box">
    @if(\App\Job::count() == 0)
    <h1 class="has-text-centered">No jobs available</h1>
    @else
        <ul>
        @foreach(\App\Job::latest()->get() as $job)
            <li><a href="/job/{{$job->id}}"><h1 class="subtitle">{{$job->position}} - <small class="menu-label">{{$job->created_at->diffForHumans()}}</small></h1></a>
            <p class="menu-label">Posted by <a href="/u/{{$job->user->username}}">{{$job->user->fname}} {{$job->user->lname}}</a> <span>Php {{$job->offer}}</span></p>
            <p>{{str_limit($job->description,30)}}</p>
            </li>
            @if(\App\Job::count() > 1)
            <hr>
            @endif
        @endforeach
        </ul>
    @endif
    </div>
</div>
@endsection