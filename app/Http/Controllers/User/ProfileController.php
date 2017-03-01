<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Storage;

class ProfileController extends Controller
{
    public function edit($user)
    {
        $profile = User::where('username',$user)->first();

        return view('users.edit',['user'=>$profile]);
    }

    public function update(Request $request, $user)
    {
        
        $this->validate($request,[
            'fname' => 'required|min:2',
            'mname' => 'required|min:2',
            'lname' => 'required|min:2',
            'bio' => 'max:3000',
        ]);
        if(!$request->hasFile('image')){
            User::where('username', $user)->update([
                'fname' => $request->fname,
                'mname' => $request->mname,
                'lname' => $request->lname,
                'bio' => $request->bio,
                'location' => $request->location,
                'occupation' => $request->occupation
            ]);
        }else{
         $path = $request->file('image')->store('public');
  
        User::where('username',$user)->update([
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'bio' => $request->bio,
            'location' => $request->location,
            'occupation' => $request->occupation,
            'image' => Storage::url($path)
        ]);
        }
        return redirect()->to('/u/'.Auth::user()->username);
    }


}
