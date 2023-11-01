<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMhsDosenToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('id_fakultas')->nullable()->index();
            $table->bigInteger('id_prodi')->nullable()->index();
            $table->bigInteger('id_kelas')->nullable()->index();
            $table->string('kode')->nullable();
            $table->string('nidn')->nullable();
            $table->string('npm')->nullable();
            $table->string('nama')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
