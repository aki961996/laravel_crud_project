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
        Schema::table('users_models', function (Blueprint $table) {
           // Add the 'password' column after 'email'
           $table->string('password')->after('email');

           // Add the 'remember_token' column after 'password'
           $table->rememberToken()->nullable()->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users_models', function (Blueprint $table) {
            // Remove the 'remember_token' column
            $table->dropColumn('remember_token');

            // Remove the 'password' column
            $table->dropColumn('password');
        });
    }
};
