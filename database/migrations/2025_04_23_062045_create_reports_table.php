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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();

            $table->string('reason');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Usuario que reporta
            $table->foreignId('article_id')->nullable()->constrained()->onDelete('cascade'); // Artículo reportado
            $table->foreignId('comment_id')->nullable()->constrained()->onDelete('cascade'); // Comentario reportado

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
