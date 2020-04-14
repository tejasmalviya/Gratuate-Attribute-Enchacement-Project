<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllactivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allactivities', function (Blueprint $table) {
            $table->increments('aaid');
            $table->bigInteger('bid')->default('1');
            $table->string('aaname')->nullable();
            $table->string('aadesc')->nullable();
            $table->string('aatype')->nullable();
            $table->string('aascope')->nullable();
            $table->string('aalink')->default('Not available');
            $table->bigInteger('aastatus')->default('1');
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
