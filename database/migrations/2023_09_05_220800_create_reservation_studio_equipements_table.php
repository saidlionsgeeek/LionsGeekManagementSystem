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
        Schema::create('reservation_studio_equipements', function (Blueprint $table) {
            $table->id();
            $table->foreignId("equipement_id")->constrained();
            $table->foreignId("reservation_studio_id")->constrained();
            $table->integer("stock");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_studio_equipements');
    }
};
