<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants_tas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('tabligh_akbar_id');
            $table->foreignId('user_id');
            $table->string('instansi');
            $table->boolean('absen')->default(False);
            $table->text('pertanyaan')->nullable();
            $table->text('evaluasi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants_tas');
    }
}
