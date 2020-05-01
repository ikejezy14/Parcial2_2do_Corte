<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionElementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion__elementos', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("habitacion_id")->unsigned();
            $table->foreign("habitacion_id")->references("id")->on("habitacions");
            $table->integer("elemento_id")->unsigned();
            $table->foreign("elemento_id")->references("id")->on("elementos");
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
        Schema::dropIfExists('habitacion__elementos');
    }
}
