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
        Schema::create('concerner', function (Blueprint $table) {
            $table->bigInteger('code_Sommets')->unsigned();
            $table->bigInteger('code_Randonnees')->unsigned();
            $table->date('date_Concerner')->nullable();
            $table->primary(['code_Sommets', 'code_Randonnees']);
            $table->foreign('code_Sommets')->references('code_Sommets')->on('sommets');
            $table->foreign('code_Randonnees')->references('code_Randonnees')->on('randonnees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerner');
    }
};
