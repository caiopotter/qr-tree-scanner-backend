<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParksTrees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parks_trees', function (Blueprint $table) {
            $table->id();
            $table->integer('park_id')->index();
            $table->integer('tree_id')->index();
            $table->text('map_latitude')->nullable();
            $table->text('map_longitude')->nullable();
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
        Schema::dropIfExists('parks_trees');
    }
}
