<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('invoices', function (Blueprint $table) {
            if (!Schema::hasColumn('invoices', 'user_id')) {
                $table->foreignId('user_id')->after('id')->constrained()->onDelete('cascade');
            }
            $table->string('crypto_type')->nullable();
            $table->decimal('amount_crypto', 18, 8)->nullable();
            $table->string('address')->nullable();
            $table->string('txid')->nullable();
            $table->timestamp('expires_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->dropColumn([
                'crypto_type',
                'amount_crypto',
                'address',
                'txid',
                'expires_at',
            ]);
        });
    }
};

