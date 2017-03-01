<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::guest())
        return view('welcome');
    
    return redirect()->to('/home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/privacy', function(){
    return view('privacy');
});

Route::get('/terms', function(){
    return view('terms');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', function(){
            return view('auth.login');
    });
    Route::get('/register', function(){
        return view('auth.register');
    });
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/register', 'Auth\RegisterController@register');
});

Route::middleware('verified')->group(function(){
    Route::get('home', function(){
        return view('users.home');
    });
    Route::get('/post/new', function(){
        return view('users.create');
    });
    Route::get('/u/{user}', function($user){
        $user = \App\User::where('username',$user)->first();
        $posts = \App\Post::where('author_id',$user->id)->get();
        return view('users.profile',['user'=>$user, 'posts' => $posts]);
    });
    Route::get('/u/{user}/edit', 'User\ProfileController@edit');
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::post('/post', 'User\PostController@store');
    Route::name('user.show')->get('/post/{id}', 'User\PostController@show');
    Route::post('/post/{id}/comment', 'User\CommentController@add_comment');
    Route::patch('/u/{user}', 'User\ProfileController@update');
    Route::get('/jobs', function(){
        return view('users.jobs');
    });

    Route::get('/job/{id}','User\JobController@display_job');
    Route::get('/search', 'User\SearchController@search');

    Route::get('/test', function(){
        $data = \App\Post::where('tags','PHP')->count();

        return $data;
    });
});