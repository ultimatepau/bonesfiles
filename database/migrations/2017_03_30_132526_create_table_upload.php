<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUpload extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('t_upload',function (Blueprint $table) {
            $table->increments('id_upload');
            $table->string('nama_file',150);
            $table->BigInteger('ukuran_file');
            $table->date('tanggal_upload');
            $table->integer('jumlah_download');
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_upload');
    }
}
