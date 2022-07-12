<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_competitions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('competition_id');
            $table->string('gelombang');
            $table->date('open_registration');
            $table->date('close_registration');
            $table->date('open_submission');
            $table->date('close_submission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_competitions');
    }
}
