<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        // binds interface to repository
        $repoArray = [
            "Announcement" => ["Announcement"],
            "Link" => ["Link"],
        ];
        foreach ($repoArray as $_dir => $_names) {
            foreach ($_names as $_eachName) {
                $this->app->bind(
                    "App\Repositories\\" . $_dir . "\\" . $_eachName . "Interface",
                    "App\Repositories\\" . $_dir . "\\" . $_eachName . "Repository"
                );
                $this->app->alias("App\Repositories\\" . $_dir . "\\" . $_eachName . "Interface", $_eachName);
            }

        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
