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
        Schema::create('ascension', function (Blueprint $table) {
            $table->bigInteger('code_Sommets')->unsigned();
            $table->bigInteger('code_Abris')->unsigned();
            $table->text('difficulte_Ascension')->nullable();
            $table->bigInteger('duree_Ascension')->nullable();
            $table->timestamps();

            $table->primary(['code_Sommets', 'code_Abris']);

            $table->foreign('code_Sommets')->references('code_Sommets')->on('sommets')->onDelete('cascade');
            $table->foreign('code_Abris')->references('code_Abris')->on('abris')->onDelete('cascade');
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
