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
        Schema::create('ascensions', function (Blueprint $table) {
            $table->bigInteger('code_Sommets')->unsigned();
            $table->bigInteger('code_abris')->unsigned();
            $table->text('difficulte_ascension')->nullable();
            $table->bigInteger('duree_ascension')->nullable();
            $table->timestamps();

            $table->primary(['code_Sommets', 'code_Abris']);

            $table->foreign('code_sommets')->references('code_sommets')->on('sommets')->onDelete('cascade');
            $table->foreign('code_abris')->references('code_abris')->on('abris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ascension');
    }
};
