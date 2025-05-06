<?php

namespace App\Providers;

use App\Models\System;
use Illuminate\Support\Facades\View;
use App\Helpers\SystemHelper;
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
        $settings = System::pluck('value', 'key')->toArray();

        View::share([
            'meta_description' => $settings['meta_description'] ?? '',
            'meta_tags' => $settings['meta_tags'] ?? '',
            'system_name' => $settings['system_name'] ?? '',
            'title' => $settings['system_name'] ?? config('app.name'),
        ]);
    }
}
