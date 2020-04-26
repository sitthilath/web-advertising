<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounterValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counter_values', function (Blueprint $table) {
 
            $table->bigIncrements('id');
            $table->bigInteger('day_id');
            $table->bigInteger('day_value');
            $table->bigInteger('yesterday_id');
            $table->bigInteger('yesterday_value');
            $table->bigInteger('week_id');
            $table->bigInteger('week_value');
            $table->bigInteger('month_id');
            $table->bigInteger('month_value');
            $table->bigInteger('year_id');
            $table->bigInteger('year_value');
            $table->bigInteger('all_value');
            $table->dateTime('record_date');
            $table->bigInteger('record_value');
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
        Schema::dropIfExists('counter_values');
    }
}
