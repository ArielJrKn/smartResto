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
        Schema::create('etablissements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->enum('type', ['resto', 'hotel', 'mixte']);
            $table->string('logo')->nullable();
            $table->string('adresse')->nullable();
            $table->string('telephone');
            $table->string('email');
            $table->string('description')->nullable();
            $table->integer('stars')->nullable();
            $table->unsignedBigInteger('id_equipement')->nullable();
            $table->foreign('id_equipement')->references('id')->on('equipements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablissement');
    }
};
