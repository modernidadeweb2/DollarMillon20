<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Invoice extends Model
    {

       
        // Defina os campos que podem ser preenchidos em massa
        protected $fillable = [
            'user_id',        // Adicione o user_id aqui
            'amount',
            'status',
            'crypto_type',
            'address',
            'txid',
            'amount_crypto',
            'expires_at'
        ];

        // Outros métodos e relacionamentos, se necessário
    }
