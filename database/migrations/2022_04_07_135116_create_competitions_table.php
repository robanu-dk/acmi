<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('year');
            $table->text('group_link');
            $table->text('subtema1')->nullable();
            $table->text('subtema2')->nullable();
            $table->text('subtema3')->nullable();
            $table->text('subtema4')->nullable();
            $table->text('subtema5')->nullable();
            $table->boolean('tim');
            $table->boolean('visibility')->default(true);
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
        Schema::dropIfExists('competitions');
    }
}
