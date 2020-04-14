<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('gid');
            $table->bigInteger('id');
            $table->bigInteger('a1');
            $table->bigInteger('a2');
            $table->bigInteger('a3');
            $table->bigInteger('a4');
            $table->bigInteger('a5');
            $table->bigInteger('a6');
            $table->bigInteger('a7');
            $table->bigInteger('a8');
            $table->bigInteger('a9');
            $table->bigInteger('a10');
            $table->bigInteger('a11');
            $table->bigInteger('a12');
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
        Schema::dropIfExists('activities');
    }
}
