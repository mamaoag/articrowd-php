<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;

class OAuthController extends Controller
{
    public $redirectTo = '/';
    
    public function redirectToProvider($driver)
    {   
        return Socialite::driver($driver)->redirect();
    }

    public function handleProviderCallback($driver)
    {
        $user = Socialite::driver($driver)->user();

        $credentials = $this->findOrCreate($user,$driver);
        Auth::login($credentials);
        return redirect($this->redirectTo);
    }

    public function findOrCreate($user, $provider)
    {
        $credentials = \App\User::where('provider_id',$user->id)->first();

        if($credentials){
            return $credentials;
        }

        return \App\User::create([
            'fname' => $credentails->name,
        ]);
    }
}
