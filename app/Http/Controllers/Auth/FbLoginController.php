<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\SocialFacebookAccountService;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FbLoginController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialFacebookAccountService $service)
    {
        $fbUser = $service->createOrGetUser(Socialite::driver('facebook')->user());
        $user = \App\Models\User::whereEmail($fbUser->getEmail())->first();

        if (!$user) {
            $user = \App\Models\User::create([
                'name' => $fbUser->getName(),
                'email' => $fbUser->getEmail(),
                'fb_id' => $fbUser->getId(),
            ]);
        }

        \Illuminate\Support\Facades\Auth::loginUsingId($user->id);

        \Illuminate\Support\Facades\Session::regenerate();

        return redirect()->route('dashboard');

    }
}
