<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\BookRepository;
use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Contracts\BookRepositoryInterface;
use App\Repositories\Contracts\HomeRepositoryInterface;
use App\Repositories\HomeRepository;
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
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(HomeRepositoryInterface::class, HomeRepository::class);
        $this->app->bind(BookRepositoryInterface::class, BookRepository::class);
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
