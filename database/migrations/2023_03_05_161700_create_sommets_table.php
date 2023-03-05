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
        Schema::create('sommets', function (Blueprint $table) {
            $table->bigIncrements('code_Sommets');
            $table->text('nom_Sommets')->nullable();
            $table->decimal('altitude_Sommets', 10, 0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sommets');
    }
};
