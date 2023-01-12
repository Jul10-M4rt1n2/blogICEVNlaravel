<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\BookRepository;
use App\Repositories\ContactRepository;
use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Contracts\BookRepositoryInterface;
use App\Repositories\Contracts\ContactRepositoryInterface;
use App\Repositories\Contracts\HomeRepositoryInterface;
use App\Repositories\Contracts\OffersRepositoryInterface;
use App\Repositories\Contracts\StudiesRepositoryInterface;
use App\Repositories\Contracts\TimelineRepositoryInterface;
use App\Repositories\Contracts\WhoweareRepositoryInterface;
use App\Repositories\Contracts\YoungRepositoryInterface;
use App\Repositories\HomeRepository;
use App\Repositories\OffersRepository;
use App\Repositories\StudiesRepository;
use App\Repositories\TimelineRepository;
use App\Repositories\WhoweareRepository;
use App\Repositories\YoungRepository;
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
        $this->app->bind(TimelineRepositoryInterface::class, TimelineRepository::class);
        $this->app->bind(StudiesRepositoryInterface::class, StudiesRepository::class);
        $this->app->bind(WhoweareRepositoryInterface::class, WhoweareRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(YoungRepositoryInterface::class, YoungRepository::class);
        $this->app->bind(OffersRepositoryInterface::class, OffersRepository::class);
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
