@extends('master')

@section('title')
Post a Job - Articrowd
@endsection

@section('content')
<section class="section">
    <div class="container">
        <div class="heading">
            <h1 class="title">Post a Job</h1>
            <h2 class="subtitle">Recruit people to build your project</h2>
        </div>
    </div>
</section>
<div class="columns">
        <div class="column">
            <form action="/post" method="POST">
                <label for="" class="label">Position</label>
                <p class="control"><input type="text" name="title" id="title" class="input {{$errors->has('title')? 'is-danger' : ''}}" placeholder="Title">@if($errors->has('title'))<span class="help is-danger">{{$errors->first('title')}}</span>@endif</p>
                <p class="control"><textarea name="body" id="body" cols="30" rows="10" class="textarea {{$errors->has('body')? 'is-danger' : ''}}" placeholder="Your message"></textarea>@if($errors->has('body'))<span class="help is-danger">{{$errors->first('body')}}</span>@endif</p>
                <label for="" class="label">Tags</label>
                <p class="control"><input type="text" name="tags" id="tags" class="input" placeholder="tags"></p>
                <button type="submit" class="button is-dark is-fullwidth">Post a Job</button>
            {{ csrf_field() }}
            </form>
        </div>
        <div class="column is-2"></div>
    </div>
@endsection