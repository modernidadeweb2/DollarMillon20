<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPhase extends Model
{
    protected $fillable = ['user_id', 'phase_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
