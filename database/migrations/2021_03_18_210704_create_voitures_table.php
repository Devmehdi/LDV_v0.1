<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->id();
            $table->string('voiture_nom');
            $table->string('matricule');
            $table->integer('prix');
            $table->string('image');
            $table->string('model');
            $table->boolean('Enstock');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('coleur_id');
            $table->unsignedBigInteger('carburant_id');
            $table->unsignedBigInteger('agence_id');
            $table->unsignedBigInteger('marque_id');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('coleur_id')->references('id')->on('coleurs');
            $table->foreign('carburant_id')->references('id')->on('carburants');
            $table->foreign('agence_id')->references('id')->on('agences');
            $table->foreign('marque_id')->references('id')->on('marques');
            $table->timestamp('deleted_at');
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
        Schema::dropIfExists('voitures');
    }
}
