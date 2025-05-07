<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('matriz', function (Blueprint $table) {
            $table->id();

            // Usuário que ocupa essa posição
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Usuário pai (posição acima na matriz)
            $table->foreignId('parent_id')->nullable()->constrained('users')->onDelete('cascade');

            // Fase da matriz (ex: Phase 1, Phase 2)
            $table->string('phase');

            // Posição na célula (1 a 6)
            $table->unsignedTinyInteger('position');

            // Ativo ou não (true se pago/qualificado)
            $table->boolean('active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matriz');
    }
};
