@extends('master') @section('title') Edit Profile @endsection @section('content')
<div class="container">
    <div class="column is-10">
    <br>
        <h1 class="title">Edit your profile</h1>
        <form action="/u/{{Auth::user()->username}}" method="POST" enctype="multipart/form-data">
            {{method_field('PATCH')}}
            <label for="" class="label">First Name</label>
            <p class="control"><input type="text" name="fname" id="fname" class="input {{$errors->has('fname')? 'is-danger' : ''}}" value="{{!Request::old('fname')? Auth::user()->fname : Request::old('fname')}}">@if($errors->has('fname'))<span class="help is-danger">{{$error->first('fname')}}</span>@endif</p>
            <label for="" class="label">Middle Name</label>
            <p class="control"><input type="text" name="mname" id="mname" class="input {{$errors->has('mname')? 'is-danger' : ''}}" value="{{!Request::old('mname')? Auth::user()->mname : Request::old('mname')}}">@if($errors->has('mname'))<span class="help is-danger">{{$error->first('mname')}}</span>@endif</p>
            <label for="" class="label">Last Name</label>
            <p class="control"><input type="text" name="lname" id="lname" class="input {{$errors->has('lname')? 'is-danger' : ''}}" value="{{!Request::old('lname')? Auth::user()->lname : Request::old('lname')}}">@if($errors->has('lname'))<span class="help is-danger">{{$error->first('lname')}}</span>@endif</p>
            <label for="" class="label">Location</label>
            <p class="control"><input type="text" name="location" id="location" class="input" value="{{!Request::old('location')? Auth::user()->location : Request::old('location')}}"><span class="help is-danger"></span></p>
            <label for="" class="label">Occupation</label>
            <p class="control"><input type="text" name="occupation" id="occupation" class="input" value="{{!Request::old('occupation')? Auth::user()->occupation : 'y'}}"><span class="help is-danger"></span></p>
            <label for="" class="label">About Yourself</label>
            <p class="control"><textarea name="bio" id="" cols="30" rows="10" class="textarea {{$errors->has('bio')? 'is-danger' : ''}}">{{!Request::old('bio')? Auth::user()->bio : Request::old('bio')}}</textarea>@if($errors->has('bio'))<span class="help is-danger">{{$error->first('bio')}}</span>@endif</p>
            <label for="" class="label">Avatar</label>
            <p class="control"><input type="file" name="image" id="image">@if($errors->has('image'))<span class="help is-danger">{{$errors->first('image')}}</span>@endif</p>
            <br>
            <button class="button is-dark is-outlined">Update Profile</button>
            {{csrf_field()}}
        </form>
    </div>
</div>
@endsection