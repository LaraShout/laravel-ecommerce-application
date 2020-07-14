<?php

namespace App\Providers;

use App\Contracts\AttributeContract;
use App\Contracts\BrandContract;
use App\Contracts\CategoryContract;
use App\Contracts\OrderContract;
use App\Contracts\ProductContract;
use App\Repositories\AttributeRepository;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        CategoryContract::class         => CategoryRepository::class,
        AttributeContract::class        => AttributeRepository::class,
        BrandContract::class            => BrandRepository::class,
        ProductContract::class          => ProductRepository::class,
        OrderContract::class            => OrderRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }
}
