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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('nomClient')->nullable();
            $table->unsignedBigInteger('id_plat')->nullable();
            $table->unsignedBigInteger('id_boisson')->nullable();
            $table->unsignedBigInteger('id_serveur');
            $table->unsignedBigInteger('id_client')->nullable();
            $table->unsignedBigInteger('id_table');
            $table->enum('status', ['En attente', 'En préparation', 'Prêt', 'Annuler', 'Payer']);
            $table->string('notes')->nullable();
            $table->foreign('id_serveur')->unique()->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_plat')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('id_boisson')->references('id')->on('boissons')->onDelete('cascade');
            $table->foreign('id_table')->references('id')->on('tables')->onDelete('cascade');
            $table->decimal('total');
            $table->id();
            $table->id();
            $table->id();
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
