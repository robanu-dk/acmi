<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablighAkbarsTable extends Migration
{
    /**
     * Run the migrations.   
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabligh_akbars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('judul');
            $table->string('pemateri');
            $table->date('open');
            $table->date('close');
            $table->dateTime('waktu');
            $table->string('foto');
            $table->string('link_grup');
            $table->text('deskripsi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabligh_akbars');
    }
}
