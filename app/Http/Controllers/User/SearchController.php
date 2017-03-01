<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {   
        $this->validate($request,[
            'search' => 'required'
        ]);
        
        switch($request->filter){
        case 'recent':
            $a = \App\Post::where('title','LIKE','%'.$request->search.'%')->latest()->limit(5)->get();
            $b = \App\Job::where('position', 'LIKE', '%'.$request->search.'%')->latest()->limit(5)->get();
            $c = \App\Idea::where('title', 'LIKE', '%'.$request->search.'%')->latest()->limit(5)->get();
            break;
        default:
            $a = \App\Post::where('title','LIKE','%'.$request->search.'%')->limit(5)->get();
            $b = \App\Job::where('position', 'LIKE', '%'.$request->search.'%')->limit(5)->get();
            $c = \App\Idea::where('title', 'LIKE', '%'.$request->search.'%')->limit(5)->get();
        } 
        return view('users.search',['posts' => $a, 'jobs' => $b, 'ideas' => $c,'title' => $request->search]);
    }
}

#