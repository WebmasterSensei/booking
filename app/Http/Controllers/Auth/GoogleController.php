<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // Redirect user to Google
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // Handle Google callback
    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            ['email' => $googleUser->email],
            [
                'name' =>  $googleUser->name,
                'google_id' => $googleUser->id,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Temporary password
                'avatar' => $googleUser->avatar,
            ]
        );

        Auth::login($user);

        return redirect()->route('dashboard'); // Change to your preferred route
    }
}
