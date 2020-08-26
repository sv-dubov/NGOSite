<?php

namespace App\Providers;

use App\Member;
use App\Post;
use App\Category;
use App\Article;
use App\Videopost;
use App\Facts;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('pages._sidebar', function($view){
            $view->with('featuredVideo', Videopost::getFeaturedOnHomepage());
            //$view->with('popularPosts', Post::getPopularPosts());
            //$view->with('featuredPosts', Post::where('is_featured', 1)->take(3)->get());
            $view->with('featuredArticles', Article::getFeaturedArticles());
            //$view->with('featuredPosts', Post::getFeaturedPosts());
            //$view->with('recentPosts', Post::orderBy('date', 'desc')->take(3)->get());
            $view->with('recentPosts', Post::getRecentPosts());
            $view->with('categories', Category::all());
        });

        view()->composer('pages.index', function($view){
            $view->with('recentPosts', Post::orderBy('date', 'desc')->take(3)->get());
            $view->with('articles', Article::orderBy('date', 'desc')->take(3)->get());
            $view->with('videoposts', Videopost::orderBy('date', 'desc')->take(3)->get());
            $view->with('members', Member::all());
            $view->with('projects', Project::orderBy('created_at', 'desc')->take(3)->get());
            $view->with('facts', Facts::all());
        });

        view()->composer('admin.*', function($view){
            $view->with('user', Auth::user());
        });
    }
}
