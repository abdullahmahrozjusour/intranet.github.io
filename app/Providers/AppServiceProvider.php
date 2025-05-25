<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
            "Event" => ["Event"],
            "News" => ["News"],
            "Modal" => ["Modal"],
            "DownloadCenter" => ["DownloadCenter"],
            "Organization" => ["Organization"],
            "UsefulContact" => ["UsefulContact"],
            "Contact" => ["Contact"],
            "Subscriber" => ["Subscriber"],
            "MissionVision" => ["MissionVision"],
            "Director" => ["Director"],
            "CeoMessage" => ["CeoMessage"],
            "PageData" => ["PageData"],
            "User" => ["User"],
            "Request" => ["Request"],
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
        if (\Request::segment(1) == 'admin') {
            Paginator::useBootstrapFive();
        } else {
            Paginator::useTailwind();
        }
    }
}
