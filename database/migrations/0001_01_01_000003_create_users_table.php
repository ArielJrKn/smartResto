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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('telephone')->nullable();
            $table->enum('type',['particulier', 'entreprise', 'staff'])->default('staff');
            $table->integer('fidelity_point')->nullable();
            $table->string('canalDeDiffusion')->nullable();
            $table->string('notes')->nullable();
            $table->boolean('active')->default(0);
            $table->date('birthDate')->nullable();
            $table->string('placeBirth')->nullable();
            $table->date('dateApply')->nullable();
            $table->decimal('salary')->nullable();
            $table->decimal('tauxSalary')->nullable();
            $table->string('iban')->nullable();
            $table->string('photo')->nullable();
            $table->unsignedBigInteger('id_role')->nullable();
            $table->foreign('id_role')->references('id')->on('roles')->onDelete('cascade');
            $table->enum('contrat',['CDI - Temps plein', 'CDI - Temps partiel', 'CDD', 'Stage', 'Freelance'])->nullable();
            $table->unsignedBigInteger('id_etablissement')->nullable();
            $table->foreign('id_etablissement')->references('id')->on('etablissements')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('DAuth')->nullable();
            $table->timestamp('DAuthExpires')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
