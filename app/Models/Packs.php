<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packs extends Model
{
    // Os campos que podem ser preenchidos (preenchimento em massa)
    protected $fillable = ['name', 'price', 'description', 'cycle_bonus', 'direct_bonus', 'active'];

    // Outros métodos ou relacionamentos, se necessário
}
