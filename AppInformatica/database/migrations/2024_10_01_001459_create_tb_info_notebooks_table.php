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
        Schema::create('tb_info_notebooks', function (Blueprint $table) {
            $table->id('idNotebook');
            $table->string('marca');
            $table->string('sistemaOperacional');
            $table->string('memoriaRam');
            $table->string('armazenamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_info_notebooks');
    }
};
