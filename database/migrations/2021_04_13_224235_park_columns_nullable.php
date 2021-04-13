<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParkColumnsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parks', function (Blueprint $table) {
            $table->text('address')->nullable()->change();
            $table->text('about')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parks', function (Blueprint $table) {
            $table->text('address')->change();
            $table->text('about')->change();
        });
    }
}
