@extends('master')

@section('title')
    Login - Articrowd
@endsection


@section('content')
    <section class="hero is-dark">
      <div class="hero-body">
        <div class="container">
          <h1 class="title has-text-centered">LOGIN</h1>
        </div>
      </div>
    </section>
    <div class="box">
      <div class="container">
        <div class="columns">
          <div class="column">
            <form action="/login" method="POST">
              <label for="" class="label">Username</label>
              <p class="control"><input type="text" name="username" id="username" class="input {{$errors->has('username')? 'is-danger' : ''}}">@if($errors->has('username'))<span class="help is-danger">{{$errors->first('username')}}</span>@endif</p>
              <label for="" class="label">Password</label>
              <p class="control"><input type="password" name="password" id="password" class="input  {{$errors->has('password')? 'is-danger' : ''}}">@if($errors->has('password'))<span class="help is-danger">{{$errors->first('password')}}</span>@endif</p>
              <button type="submit" class="button is-outlined is-dark">Login In</button>
              {{csrf_field()}}
            </form>
          </div>
          <div class="column">
            <div class="container has-text-centered">
              <h3 class="menu-label">Connect with:</h3>
              <button class="button is-info has-text-centered is-fullwidth"><i class="fa fa-facebook"></i></button>
              <br>
              <button class="button is-primary has-text-centered is-fullwidth"><i class="fa fa-twitter"></i></button>
              <br>
              <button class="button is-danger has-text-centered is-fullwidth"><i class="fa fa-youtube-play"></i></button>
            </div>
          </div>
        </div>
      </div>
 
@endsection