<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('sub_competition_id');
            $table->foreignId('user_id');
            $table->string('nama_ketua');
            $table->string('univ_ketua');
            $table->string('nim_ketua');
            $table->string('nama_anggota1')->nullable();
            $table->string('univ_anggota1')->nullable();
            $table->string('nim_anggota1')->nullable();
            $table->string('nama_anggota2')->nullable();
            $table->string('univ_anggota2')->nullable();
            $table->string('nim_anggota2')->nullable();
            $table->string('bukti_pembayaran');
            $table->string('ktm');
            $table->string('follow_acmi');
            $table->string('follow_ukmki');
            $table->string('follow_kastrat');
            $table->string('twibbon');
            $table->boolean('verified')->default(False);
            $table->string('submission')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
