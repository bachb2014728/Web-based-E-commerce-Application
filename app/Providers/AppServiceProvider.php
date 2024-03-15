<?php

namespace App\Providers;

use App\Helper\Cart;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //view()-> share()
        view()->composer("*", function ($view) {
            $cates = $this->getCategories();
            $view->with([
                "cart" => new Cart(),
                "cates" => $cates,
            ]);
        });

        //
    }
    public function getCategories(): array
    {
        $categories = Category::all();
        $listCategory = [];
        Category::recursive($categories, $parents = 0, $level = 1 , $listCategory);
        return $listCategory;
    }
}
