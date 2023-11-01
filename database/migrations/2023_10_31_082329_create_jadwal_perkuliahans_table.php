<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPerkuliahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_perkuliahans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_semester')->nullable()->index();
            $table->bigInteger('id_fakultas')->nullable()->index();
            $table->date('tanggal')->nullable();
            $table->string('nama_hari')->nullable();
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
        Schema::dropIfExists('jadwal_perkuliahans');
    }
}
