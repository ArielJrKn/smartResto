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

        Schema::create('verres', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->decimal('volumeVerre');
            $table->string('photo');
            $table->timestamps();
        });


        Schema::create('boissons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('percentAlcohol')->nullable();
            $table->decimal('priceBottle');
            $table->integer('stock');
            $table->decimal('volumeBottle');
            $table->integer('nbreVerre')->nullable();
            $table->decimal('priceVerre');
            $table->boolean('disponible');
            $table->string('cover');
            $table->unsignedBigInteger('id_verre');
            $table->foreign('id_verre')->references('id')->on('verres')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boissons');
    }
};
