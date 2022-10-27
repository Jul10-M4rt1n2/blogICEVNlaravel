<?php

namespace App\Providers;

use App\Services\BaseService;
use App\Services\BookService;
use App\Services\Contracts\BaseServiceInterface;
use App\Services\Contracts\BookServiceInterface;
use App\Services\Contracts\HomeServiceInterface;
use App\Services\HomeService;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseServiceInterface::class, BaseService::class);
        $this->app->bind(HomeServiceInterface::class, HomeService::class);
        $this->app->bind(BookServiceInterface::class, BookService::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
