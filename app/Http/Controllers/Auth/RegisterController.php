<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\User;
use App\Mail\ConfirmationEmail;

class RegisterController extends Controller
{
        function __construct() 
        {
            $this->middleware(['guest']);
        }

        function register(Request $request)
        {
            $this->validate($request, [
                    'fname' => 'required|min:2',
                    'mname' => 'required|min:2',
                    'lname' => 'required|min:2',
                    'username' => 'required|min:2|unique:users,username',
                    'email' => 'required|min:2|email|unique:users,email',
                    'password' => 'required|min:2|confirmed',
                    'confirm' => 'required'
            ]);

            #$user = 
            \App\User::create([
                    'fname' => $request->fname,
                    'mname' => $request->mname,
                    'lname' => $request->lname,
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'code' => str_random(5),
                
            ]);

            #Mail::to($request->email)->send(new ConfirmationEmail($user));

            return redirect()->to('/login')->withInfo('Account Created, Please check your email for verifiication');
        }
}
