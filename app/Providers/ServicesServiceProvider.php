<?php

namespace App\Providers;

use App\Services\BaseService;
use App\Services\BookService;
use App\Services\Contracts\BaseServiceInterface;
use App\Services\Contracts\BookServiceInterface;
use App\Services\Contracts\HomeServiceInterface;
use App\Services\Contracts\StudiesServiceInterface;
use App\Services\Contracts\TimelineServiceInterface;
use App\Services\HomeService;
use App\Services\StudiesService;
use App\Services\TimelineService;
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
        $this->app->bind(TimelineServiceInterface::class, TimelineService::class);
        $this->app->bind(StudiesServiceInterface::class, StudiesService::class);
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
