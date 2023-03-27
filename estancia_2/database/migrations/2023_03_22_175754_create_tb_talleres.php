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
        Schema::create('tb_talleres', function (Blueprint $table) {
            $table->increments('idt');
            $table->string('nameTaller');
            $table->string('nameDocente');
            $table->string('nameAlum');
            $table->string('fh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_talleres');
    }
};
