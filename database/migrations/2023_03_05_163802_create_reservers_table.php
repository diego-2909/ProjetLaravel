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
        Schema::create('reserver', function (Blueprint $table) {
            $table->bigInteger('code_Abris')->unsigned();
            $table->bigInteger('code_Randonnees')->unsigned();
            $table->date('date_Reserver')->nullable();
            $table->text('statut_Reserver')->nullable();
            $table->primary(['code_Abris', 'code_Randonnees']);
            $table->foreign('code_Abris')->references('code_Abris')->on('abris')->onDelete('cascade');
            $table->foreign('code_Randonnees')->references('code_Randonnees')->on('randonnees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserver');
    }
};
