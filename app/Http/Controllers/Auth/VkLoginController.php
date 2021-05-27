<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VkLoginController extends Controller
{
    public function redirect()
    {
        return \Laravel\Socialite\Facades\Socialite::driver('vkontakte')->redirect();
    }
    public function callback()
    {
        $vkUser = \Laravel\Socialite\Facades\Socialite::driver('vkontakte')->user();
        $user = \App\Models\User::whereEmail($vkUser->getEmail())->first();

        if (!$user) {
            $user = \App\Models\User::create([
                'name' => $vkUser->getName(),
                'email' => $vkUser->getEmail(),
                'vk_id' => $vkUser->getId(),
            ]);
        }

        \Illuminate\Support\Facades\Auth::loginUsingId($user->id);

        \Illuminate\Support\Facades\Session::regenerate();

        return redirect()->route('dashboard');
    }
}
