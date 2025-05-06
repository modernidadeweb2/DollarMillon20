<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ✅ ESTA LINHA É ESSENCIAL

class SystemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('system')->insert([
            ['key' => 'meta_description', 'value' => 'Bem-vindo ao DollarMillon20 - Sua plataforma de MMN.'],
            ['key' => 'meta_tags', 'value' => 'DollarMillon20, MMN, Marketing, USDT'],
            ['key' => 'system_name', 'value' => 'DollarMillon20'],
        ]);
    }
}
