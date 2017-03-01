<?php

namespace App\Http\Controllers\User;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ALL POSTS
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'title' => 'required|min:4',
                'body' => 'required|max:1000'
        ]);

        $post =\App\Post::create([
             'author_id' => Auth::user()->id,
             'title' => $request->title,
             'body' => $request->body,
             'tags' => $request->tags
        ]);

        return redirect()->route('user.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $result = \App\Post::findOrFail($post);
        return view('users.post',['post'=>$result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $result = \App\Post::findOrFail($post);
        return view('users.post-edit',['post'=>$result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post)
    {
        $this->validate($request,[
            'title' => 'required|min:4',
            'body' => 'required|max:1000'
        ]);

        \App\Post::find($post)->fill([
            'title' => $request->title,
            'body' => $request->body,
            'tags' => $request->tags
        ]);

        return redirect()->$this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        \App\Post::where('id', $post)->where('author_id',Auth::user()->id);

        return redirect()->to('/home')->withInfo('Post has been deleted');
    }
}
