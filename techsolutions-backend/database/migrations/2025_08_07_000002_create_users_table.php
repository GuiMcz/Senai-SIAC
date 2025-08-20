<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email')->unique();
            $table->string('cpf', 14)->unique();
            $table->string('telefone')->nullable();
            $table->string('cep', 9);
            $table->string('uf', 2);
            $table->string('localidade', 30);
            $table->string('bairro', 40);
            $table->string('logradouro', 100);
            $table->string('password')->nullable();
            $table->foreignId('perfil_id')->constrained('perfis');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('users');
    }
};
