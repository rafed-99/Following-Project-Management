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
        Schema::create('project_followings', function (Blueprint $table) {
            $table->id('id_following');
            $table->BigInteger('matricule_responsable')->unsigned();
            $table->foreign('matricule_responsable')->on('responsables')->references('matricule')->onDelete('cascade');
            $table->BigInteger('matricule_pro')->unsigned();
            $table->foreign('matricule_pro')->on('projects')->references('matricule_project')->onDelete('cascade');
            $table->integer('cout');
            $table->integer('dami');
            $table->string('offre');
            $table->integer('contact');
            $table->string('stage');
            //$table->foreignId('matricule_responsable')->references('matricule')->on('responsables')->onDelete('cascade');
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
        Schema::dropIfExists('project_followings');
    }
};
