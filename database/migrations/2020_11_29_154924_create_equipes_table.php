<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 20);
            $table->string('ville', 20);
            $table->string('pays', 20);
            $table->integer('maxJoueurs');
            $table->integer('maxAvant');
            $table->integer('maxArrière');
            $table->integer('maxCentraux');
            $table->integer('maxRemplacant');
 
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
        Schema::dropIfExists('equipes');
    }
}

