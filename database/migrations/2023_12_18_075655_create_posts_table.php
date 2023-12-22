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
            // $table->string('slug')->nullable()->change()->unique();
            $table->string('kategori_post');
            $table->text('deskripsi');
            $table->text('image');
            $table->timestamps();
            // $table->unsignedBigInteger('optionals_id');
            // $table->foreign('optionals_id')->references('id')->on('optionals');
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
