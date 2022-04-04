<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_has_facilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->constrained('unit')->onDelete('cascade');;
            $table->foreignId('facility_id')->constrained('unit_facilities')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_unit_has_facilities');
    }
};
