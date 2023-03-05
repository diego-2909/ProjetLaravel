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
        Schema::create('abris', function (Blueprint $table) {
            $table->bigIncrements('code_Abris');
            $table->text('nom_Abris')->nullable();
            $table->text('type_Abris')->nullable();
            $table->text('altitude_Abris')->nullable();
            $table->text('places_Abris')->nullable();
            $table->text('prixNuit_Abris')->nullable();
            $table->text('prixRepas_Abris')->nullable();
            $table->text('telGardien_Abris')->nullable();
            $table->bigInteger('code_Vallees')->unsigned();
            $table->timestamps();

            $table->foreign('code_Vallees')->references('code_Vallees')->on('vallees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abris');
    }
};
