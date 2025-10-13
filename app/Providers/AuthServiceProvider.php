<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\JobPolicy;
use App\Models\Job;

class AuthServiceProvider extends ServiceProvider
{
  protected $policies = [
    Job::class => JobPolicy::class
  ];

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
    $this->registerPolicies();
  }
}
