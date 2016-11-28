<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Socialite;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{

    public function redirectToProvider(){
        return Socialite::driver('github')->redirect();
    }

    public function handleProviderCallback(){

        $githubUser=Socialite::driver('github')->user();
    }

}
