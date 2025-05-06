<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\System;

class BaseController extends Controller
{
    public function __construct()
    {
        $settings = System::pluck('value', 'key')->toArray();

        View::share([
            'meta_description' => $settings['meta_description'] ?? '',
            'meta_tags' => $settings['meta_tags'] ?? '',
            'system_name' => $settings['system_name'] ?? 'DollarMillon20',
            'title' => $settings['system_name'] ?? 'DollarMillon20',
        ]);
    }
}

