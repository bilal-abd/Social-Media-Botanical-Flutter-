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
        Schema::create('plante', function (Blueprint $table) {
            $table->id();
            $table->string('nom_plante');
            $table->string('chemin_plante');
            $table->string('caracteristiques');
            $table->text('description');
            $table->string('localisation');
            $table->integer('id_type');
            $table->binary('image');
            $table->integer('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('plante');
    }
};
