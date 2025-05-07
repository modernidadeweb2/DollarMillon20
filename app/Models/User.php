<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

   // Retorna o saldo do usuário
    public function balance()
    {
        return $this->hasOne(Balance::class);
    }

    // Bônus recebidos
    public function bonus()
    {
        return $this->hasMany(Bonus::class);
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function userPhases()
    {
        return $this->hasMany(UserPhase::class);
    }

    public function matriz()
    {
        return $this->hasMany(Matriz::class);
    }

    // Filhos diretos do usuário na rede
    public function children()
    {
        return $this->hasMany(User::class, 'sponsor_id');
    }

    // Usuário que indicou este
    public function sponsor()
    {
        return $this->belongsTo(User::class, 'sponsor_id');
    }


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
