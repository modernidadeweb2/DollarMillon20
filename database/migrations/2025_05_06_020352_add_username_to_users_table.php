<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('username')->nullable()->after('name'); // sem unique por enquanto
    });

    // Após adicionar a coluna, preencha com valores únicos fictícios
    \App\Models\User::all()->each(function ($user) {
        $user->username = 'user' . $user->id;
        $user->save();
    });

    // Agora sim, aplique a constraint UNIQUE
    Schema::table('users', function (Blueprint $table) {
        $table->unique('username');
    });
}

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
        });
    }
};
