<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('see-posts', function(User $user, $userPostId){
            //Receive users followed by the user
            $followedList = DB::table('users_follows')
                                ->where('user_id', Auth::user()->id)
                                ->pluck('followed_user_id')
                                ->toArray();
                                
            if(in_array($userPostId, $followedList)){
                return true;
            }else{
                return false;
            }
        });
    }
}
