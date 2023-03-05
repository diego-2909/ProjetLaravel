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
        Schema::create('randonnees', function (Blueprint $table) {
            $table->bigIncrements('code_Randonnees');
            $table->integer('nbPersonnes_Randonnees')->nullable();
            $table->date('dateDebut_Randonnees')->nullable();
            $table->date('dateFin_Randonnees')->nullable();
            $table->bigInteger('code_Guides')->unsigned();
            $table->timestamps();

            $table->foreign('code_Guides')->references('code_Guides')->on('guides')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('randonnees');
    }
};
