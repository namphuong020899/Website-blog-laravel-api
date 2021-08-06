<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CategoryPost;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){


            $url_canonical = Request()->url();
            $category = CategoryPost::all();
            $post_image = Post::all();
            $description_home = 'Blog Music Phát Thanh Cảm Xúc Của Bạn';
            $image_og_home = url('public/images/logo-1.png');

            $view->with(compact('url_canonical','category','description_home','image_og_home','post_image'));
        });
    }
}
