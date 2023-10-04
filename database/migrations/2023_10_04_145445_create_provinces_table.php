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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id('id_province');
            $table->string('nombre',200);
            $table->unsignedBigInteger('id_region');
            $table->dateTime('created_at', $precision = 3);
            $table->dateTime('updated_at', $precision = 3);
            $table->foreign('id_region')->references('id_region')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
};
