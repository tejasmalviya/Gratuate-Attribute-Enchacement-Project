<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('aid');
            $table->bigInteger('id');
            $table->string('aname');
            $table->string('sname');
            $table->string('atype');
            $table->string('ascope');
            $table->string('adesc')->nullable();
            $table->string('alink')->default('Not available');
            $table->date('adate');
            $table->mediumText('image');
            $table->bigInteger('astatus');
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
