<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    protected $table = 'bonus'; // ou 'bonificacoes', dependendo do seu banco

    protected $fillable = ['user_id', 'valor']; // ajuste os campos conforme seu banco

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
