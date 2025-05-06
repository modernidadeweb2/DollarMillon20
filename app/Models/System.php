<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $table = 'system'; // ✅ define explicitamente o nome da tabela

    public $timestamps = false; // ✅ se sua tabela não tem created_at/updated_at

    protected $fillable = ['key', 'value'];
}
