<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapemohonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapemohons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('nik');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('alamat');
            $table->string('tgl_pengajuan');
            $table->string('ktp');
            $table->string('kk');
            $table->string('pekerjaan');
            $table->string('gaji');
            $table->string('rekening');
            $table->string('wa');
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
        Schema::dropIfExists('datapemohons');
    }
}
