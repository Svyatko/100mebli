<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Field;
use App\Models\Item;
use App\Observers\Admin\CategoryObserver;
use App\Observers\Admin\FieldObserver;
use App\Observers\Admin\ItemObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Field::observe(FieldObserver::class);
        Category::observe(CategoryObserver::class);
        Item::observe(ItemObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
