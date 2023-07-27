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
        Schema::create('users_models', function (Blueprint $table) {
            $table->bigIncrements('user_id'); // user_id as primary key
            $table->string('name', 50);
            $table->string('email', 30)->nullable();
            $table->date('date_of_birth');
            $table->tinyInteger('status')->default(1)->comment('1:active, 0:inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_models');
    }
};
