<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IdeaController extends Controller
{
    public function create_idea(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);

        \App\Idea::create([
            'title' => 'required',
            'body' => 'required',
            'author_id' => Auth::user()->id
        ]);

        return redirect()->to('/ideas');
    }

    public function display($id)
    {
        $idea = \App\Idea::find($id);

        return view('users.idea',['idea'=> $idea]);
    }

    public function edit_idea($id, Request $request)
    {
        $idea = \App\Idea::find($id);

        return view('users.idea-edit',['idea'=>$idea]);
    }

    public function delete_idea($id)
    {
        \App\Idea::find($id)->delete();

        return redirect()->to('/ideas');
    }
}
