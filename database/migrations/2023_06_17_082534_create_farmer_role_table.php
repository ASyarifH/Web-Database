<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerRoleTable extends Migration
{
    public function up()
    {
        Schema::create('farmer_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('farmer_id');
            $table->string('role');
            $table->timestamps();

            $table->foreign('farmer_id')->references('id')->on('farmers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('farmer_role');
    }
}