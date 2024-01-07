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
            $table->id();
            $table->string('judul');
            $table->longText('detail');
            $table->string('img_sampul');
            $table->string('slug')->unique()->nullable();
            $table->string('headline');
            $table->timestamps();
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->unsignedBigInteger('objek_id');
            $table->foreign('objek_id')->references('id')->on('objeks');
            // $table->foreignId('categori_id');
            // $table->foreignId('objek_id');
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
