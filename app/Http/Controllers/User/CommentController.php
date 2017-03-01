<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class CommentController extends Controller
{   
    public function add_comment(Request $request, $id)
    {   
        $this->validate($request,[
            'body' => 'required|max:1000'
        ]);

        $post = \App\Post::find($id);

        $comment = $post->comments()->create(['body' => $request->body,'author_id' => Auth::user()->id]);
        return redirect()->back();
    }
}
