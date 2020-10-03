<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->increments('dir_id');
            $table->string('dir_estado');
            $table->string('dir_municipio');
            $table->integer('dir_codPostal');
            $table->string('dir_colonia');
            $table->string('dir_calle');
            $table->string('dir_numExterior');
            $table->string('dir_numInterior');
            $table->text('dir_referencia');
            $table->integer('fk_user')->unsigned();
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('direccion');
    }
}
