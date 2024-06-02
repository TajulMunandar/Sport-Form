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
        Schema::create('instrumens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_wasit')->constrained('wasits')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('id_lomba')->constrained('acara_lombas')->onDelete('restrict')->onUpdate('cascade');
            $table->string('pb');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instrumens');
    }
};
