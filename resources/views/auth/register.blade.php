@extends('master')

@section('title')
    Register - Articrowd
@endsection


@section('content')
<section class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <h1 class="title has-text-centered">REGISTER</h1>
        </div>
    </div>
</section>
<div class="box">
    <div class="container">
        <form action="/register" method="POST">
            <label for="" class="label">First Name</label>
            <p class="control"><input type="text" name="fname" id="fname" class="input {{$errors->has('fname')? 'is-danger' : ''}}" value="{{Request::old('fname')}}">@if($errors->has('fname'))<span class="help is-danger">{{$errors->first('fname')}}</span>@endif</p>
            <label for="" class="label">Middle Name</label>
            <p class="control"><input type="text" name="mname" id="mname" class="input {{$errors->has('mname')? 'is-danger' : ''}}" value="{{Request::old('mname')}}">@if($errors->has('mname'))<span class="help is-danger">{{$errors->first('mname')}}</span>@endif</p>
            <label for="" class="label">Last Name</label>
            <p class="control"><input type="text" name="lname" id="lname" class="input {{$errors->has('lname')? 'is-danger' : ''}}" value="{{Request::old('lname')}}">@if($errors->has('lname'))<span class="help is-danger">{{$errors->first('lname')}}</span>@endif</p>
            <label for="" class="label">Username</label>
            <p class="control"><input type="text" name="username" id="username" class="input {{$errors->has('username')? 'is-danger' : ''}}" value="{{Request::old('username')}}">@if($errors->has('username'))<span class="help is-danger">{{$errors->first('username')}}</span>@endif</p>
            <label for="" class="label">Email</label>
            <p class="control"><input type="email" name="email" id="email" class="input {{$errors->has('email')? 'is-danger' : ''}}" value="{{Request::old('email')}}">@if($errors->has('email'))<span class="help is-danger">{{$errors->first('email')}}</span>@endif</p>
            <label for="" class="label">Password</label>
            <p class="control"><input type="password" name="password" id="password" class="input {{$errors->has('password')? 'is-danger' : ''}}">@if($errors->has('password'))<span class="help is-danger">{{$errors->first('password')}}</span>@endif</p>
            <label for="" class="label">Confirm Pasword</label>
            <p class="control"><input type="password" name="password_confirmation" id="password_confirmation" class="input"><span class="help is-danger"></span></p>
            <p class="control"><label for="" class="checkbox"><input type="checkbox" name="confirm" id="confirm">I agree to the <span><a href="/terms">&nbsp;Terms and Conditions&nbsp;</a></span> and <span><a href="/privacy">&nbsp;Privacy Policy</a></span></label>@if($errors->has('confirm'))<span class="help is-danger">{{$errors->first('confirm')}}</span>@endif</p>
            <button type="submit" class="button is-dark is-outlined">Register</button>
            {{csrf_field()}}
        </form>
    </div>
</div>
@endsection