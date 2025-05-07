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
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();

            // ID do usuário que solicitou o saque
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Valor do saque
            $table->decimal('amount', 12, 2);

            // Status do saque: pending, paid, rejected
            $table->enum('status', ['pending', 'paid', 'rejected'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawals');
    }
};

