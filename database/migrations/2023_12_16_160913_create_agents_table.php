<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    public function up()
    {
        Schema::create('security_agents', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('password');
            $table->json('matches_affectes')->nullable(); // Un tableau de matches affectés
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('security_agents');
    }
}
