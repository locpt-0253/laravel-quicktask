<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->boolean('is_admin');
            $table->boolean('is_active');
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->dropColumn('last_name');
            $table->dropColumn('first_name');
            $table->dropColumn('username');
            $table->dropColumn('is_active');
            $table->dropColumn('is_admin');
        });
    }
};
