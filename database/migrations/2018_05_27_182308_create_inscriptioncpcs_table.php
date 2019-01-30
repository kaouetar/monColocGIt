<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptioncpcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptioncpcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teamname');
            $table->string('university');

            $table->string('Participant1Name');
            $table->string('Participant1Mail');

            $table->string('Participant2Name');
            $table->string('Participant2Mail');

            $table->string('Participant3Name');
            $table->string('Participant3Mail');

            $table->string('CoachName');
            $table->string('CoachMail');
            $table->string('CoachPhone');

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
        Schema::dropIfExists('inscriptioncpcs');
    }
}
