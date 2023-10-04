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
        Schema::create('unions', function (Blueprint $table) {
            $table->char('number_doc',20);
            $table->unsignedBigInteger('id_document');
            $table->primary(['number_doc', 'id_document']);
            $table->dateTime('date_creation', $precision = 3);
            $table->dateTime('created_at', $precision = 3);
            $table->dateTime('updated_at', $precision = 3);   
            $table->foreign('number_doc')->references('number_doc')->on('persons');
            $table->foreign('id_document')->references('id_document')->on('documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unions');
    }
};
