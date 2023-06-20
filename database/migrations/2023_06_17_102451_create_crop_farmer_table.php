<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropFarmerTable extends Migration
{
    public function up()
    {
        Schema::create('crop_farmer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crop_id');
            $table->unsignedBigInteger('petani_id')->nullable();
            $table->unsignedBigInteger('ahli_agronomi_id')->nullable();
            $table->unsignedBigInteger('ahli_kesuburan_id')->nullable();
            $table->unsignedBigInteger('ahli_hama_id')->nullable();
            $table->unsignedBigInteger('ahli_ekonomi_id')->nullable();
            $table->unsignedBigInteger('ahli_gizi_id')->nullable();
            $table->timestamps();

            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
            $table->foreign('petani_id')->references('id')->on('farmers')->onDelete('cascade');
            $table->foreign('ahli_agronomi_id')->references('id')->on('farmers')->onDelete('cascade');
            $table->foreign('ahli_kesuburan_id')->references('id')->on('farmers')->onDelete('cascade');
            $table->foreign('ahli_hama_id')->references('id')->on('farmers')->onDelete('cascade');
            $table->foreign('ahli_ekonomi_id')->references('id')->on('farmers')->onDelete('cascade');
            $table->foreign('ahli_gizi_id')->references('id')->on('farmers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('crop_farmer');
    }
}

