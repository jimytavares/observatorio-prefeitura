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
        Schema::create('ibge_populacao', function (Blueprint $table) {
            $table->id();
            $table->string('publico', 50);
            $table->string('faixa_etaria', 50);
            $table->integer('populacao_total');
            $table->integer('feminino');
            $table->integer('masculino');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
