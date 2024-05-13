<?php

namespace App\Providers;

use App\Models\Content\Directory;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewShareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Facades\View::composer('layouts.dashboard-new._partials.sidebar', function(View $view) {
            $contentDirectories = Directory::where('depth', 0)
                ->orderBy('name')
                ->get();

            $view->with('contentDirectories', $contentDirectories);
        });
    }
}
