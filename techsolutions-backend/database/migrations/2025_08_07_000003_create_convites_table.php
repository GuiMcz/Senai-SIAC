<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('convites', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('token')->unique();
            $table->enum('status', ['pendente', 'finalizado', 'vencido'])->default('pendente');
            $table->timestamp('expira_em');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('convites');
    }
};
