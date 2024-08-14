<?php

namespace App\Providers;

use App\Interfaces\AuthenticationInterface;
use App\Repositories\AuthenticationRepository;
use Illuminate\Support\ServiceProvider;

class AuthenticationServiceProvider extends ServiceProvider
{
  
    public function register(): void
    {
        $this->app->bind(AuthenticationInterface::class, AuthenticationRepository::class);
    }

  
     
    public function boot(): void
    {
        
    }
}
