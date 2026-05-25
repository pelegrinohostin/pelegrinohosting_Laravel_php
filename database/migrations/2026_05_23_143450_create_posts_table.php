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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();   //Clave primaria auto incremental
            $table->string('title'); //Título del post
            $table->text('content'); //contenido del post
            $table->timestamps();  //crated_at y updated_at para llevar el control de las fechas de creación y actualización del post
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
