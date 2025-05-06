<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('sponsor_id')->nullable()->after('id');
            $table->foreign('sponsor_id')->references('id')->on('users')->onDelete('set null');
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['sponsor_id']);
            $table->dropColumn('sponsor_id');
        });
    }
};
