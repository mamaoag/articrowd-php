<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
        function __construct() 
        {
                $this->middleware(['guest'])->except('logout');
        }

        function login(Request $request)
        {
                $this->validate($request,[
                        'username' => 'required',
                        'password' => 'required'
                ]);

                $user_details = array(
                        'username' => $request->username,
                        'password' =>  $request->password
                );
                
                $email_details = array(
                        'email' => $request->username,
                        'password' => $request->password
                );

                if(Auth::attempt($user_details)){
                    
                    return redirect()->to('/home');
                }elseif(Auth::attempt($email_details)){

                    return redirect()->to('/home');
                }else{

                    if(\App\User::where('email',$request->username)->first() || \App\User::where('username',$request->username)->first())
                        return redirect()->back()->withInfo('Invalid Credentials');
                    else
                        return redirect()->back()->withInfo('Account does not exist');
                }
        }

        function logout()
        {
                Auth::logout();

                return redirect()->to('/');
        }
}
