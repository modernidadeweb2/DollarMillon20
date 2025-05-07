<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Packs;  // Certifique-se de que "Packs" está com "P" maiúsculo

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  

    public function run()
    {
        Packs::insert([
            [
                'name' => 'Plano Bronze',
                'price' => 100.00,
                'description' => 'Acesso básico',
                'cycle_bonus' => 300.00,
                'direct_bonus' => 10.00
            ],
            [
                'name' => 'Plano Prata',
                'price' => 250.00,
                'description' => 'Benefícios intermediários',
                'cycle_bonus' => 750.00,
                'direct_bonus' => 25.00
            ],
            [
                'name' => 'Plano Ouro',
                'price' => 500.00,
                'description' => 'Todos os recursos liberados',
                'cycle_bonus' => 1500.00,
                'direct_bonus' => 50.00
            ],
        ]);
    }
    
}
