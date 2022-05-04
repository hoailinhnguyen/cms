<?php

namespace App\Providers;

use App\Repositories\Customers\CustomerRepository;
use App\Repositories\Customers\CustomerRepositoryEloquent;
use App\Repositories\Users\UserRepository;
use App\Repositories\Users\UserRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CustomerRepository::class, CustomerRepositoryEloquent::class);
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);

    }

}
