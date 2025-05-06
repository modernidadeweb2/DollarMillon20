<?php

// app/Helpers/SystemHelper.php
namespace App\Helpers;

use App\Models\System;

class SystemHelper
{
    public static function getVar($key)
    {
        $entry = System::where('key', $key)->first();
        return $entry ? $entry->value : '';
    }
}
