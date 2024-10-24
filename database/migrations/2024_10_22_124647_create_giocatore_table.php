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
        Schema::create('giocatore', function (Blueprint $table) {
            $table->bigIncrements('id_giocatore');
            $table->string('nome_giocatore',255);
            $table->string('cognome_giocatore',255);
            $table->string('username_giocatore',255);
            $table->integer('partite_giocate');
            $table->integer('partite_vinte');
            $table->integer('accuse_fatte');
            $table->integer('partite_annullate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giocatore');
    }
};
