<?php

namespace App\Providers;

use App\ImageSlider;
use App\Member;
use App\Post;
use App\Article;
use App\User;
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
            $view->with('featuredArticles', Article::getFeaturedArticles());
            $view->with('recentPosts', Post::getRecentPosts());
            $view->with('articles', Article::orderBy('date', 'desc')->take(3)->get());
            $view->with('videoposts', Videopost::orderBy('date', 'desc')->take(3)->get());
        });

        view()->composer('pages.index', function($view){
            $view->with('recentPosts', Post::orderBy('date', 'desc')->take(3)->get());
            $view->with('articles', Article::orderBy('date', 'desc')->take(3)->get());
            $view->with('videoposts', Videopost::orderBy('date', 'desc')->take(3)->get());
            $view->with('members', Member::all());
            $view->with('projects', Project::orderBy('created_at', 'desc')->take(3)->get());
            $view->with('facts', Facts::all());
        });

        view()->composer('partials._slider', function($view){
            $view->with('slider', ImageSlider::all());
        });

        view()->composer('admin.*', function($view){
            $view->with('auser', Auth::user());
        });

        view()->composer('pages._sidemember', function($view){
            $view->with('members', Member::getAll());
        });
    }
}
