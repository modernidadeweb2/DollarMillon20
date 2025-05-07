<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            // Relacionamento com usuário
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Valor em moeda fiat (R$)
            $table->decimal('amount', 12, 2);

            // Status da fatura: pending, paid, expired
            $table->enum('status', ['pending', 'paid', 'expired'])->default('pending');

            // Criptomoeda usada no pagamento (ex: usdt-trc20, usdt-bep20)
            $table->string('crypto_type')->nullable();

            // Valor em criptomoeda
            $table->decimal('amount_crypto', 18, 8)->nullable();

            // Endereço de pagamento (wallet)
            $table->string('address')->nullable();

            // Hash da transação
            $table->string('txid')->nullable();

            // Expiração da fatura (opcional)
            $table->timestamp('expires_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
