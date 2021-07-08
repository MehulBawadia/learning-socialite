<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    /**
     * Redirect the user to Facebook to authenticate.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginWithFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Get the user from the Facebook, and login them in the app.
     * If the user does not exist, create them.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $userExist = User::where('email', $user->email)->first();
        if (! $userExist) {
            $userExist = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('Password'),
                'provider' => 'facebook',
                'provider_id' => $user->id,
                'access_token' => $user->token,
                'avatar' => $user->avatar,
            ]);
        }

        auth()->login($userExist);

        return redirect(route('dashboard'));
    }
}
