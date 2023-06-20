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
        Schema::create('farmers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
<<<<<<< HEAD
            $table->string('role');
            $table->integer('age')->nullable('-');
            $table->char('address')->nullable('-');
=======
            $table->integer('age');
            $table->char('address');
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
            $table->char('detail')->nullable('-');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
