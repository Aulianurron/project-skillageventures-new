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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable(); // Menyimpan path gambar
            $table->string('name');
            $table->bigInteger('category_program_id')->unsigned();
            $table->string('status');
            $table->string('description');
            $table->text('document_program');
            $table->text('slug');
            $table->timestamps();

            $table->foreign('category_program_id')->references('id')->on('category_programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
