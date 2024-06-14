<?php

namespace App\Providers;

use App\Models\user_activity;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\user_photo;
use Illuminate\Support\Facades\Auth;

class ViewUserPhotoProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        if (Auth::check()) {
            View::composer('*', function ($view) {
                $loggedUserPhoto = user_photo::where('user_id', Auth::id())->first();
                $userProfilePath = asset('usersProfile/' . $loggedUserPhoto->foto);
                
                $view->with('userProfilePath', $userProfilePath);
            });
        }

    }
}
