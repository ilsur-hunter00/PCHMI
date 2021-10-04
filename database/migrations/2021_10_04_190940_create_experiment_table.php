<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperimentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('num_count_1');
            $table->integer('num_count_2');
            $table->integer('pict_count_1');
            $table->integer('pict_count_2');
            $table->integer('bold_count_1');
            $table->integer('bold_count_2');
            $table->integer('cursive_count_1');
            $table->integer('cursive_count_2');
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
        Schema::dropIfExists('experiment');
    }
}
