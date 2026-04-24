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
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('libelle');
            $table->integer('places');
            $table->enum('zone', ['terrasse', 'salle principale', 'salon prive'])->default('salle principale');
            $table->unsignedBigInteger('id_serveur')->nullable();
            $table->string('qr_code')->nullable();
            $table->unsignedBigInteger('id_etablissement')->nullable();
            $table->enum('status', ['Libre', 'Occupé', 'Attente', 'Réservé', 'Indisponible'])->default('Libre');
            $table->text('notes')->nullable();
            $table->foreign('id_serveur')->unique()->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_etablissement')->references('id')->on('etablissements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
