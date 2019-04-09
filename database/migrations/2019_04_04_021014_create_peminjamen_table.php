<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeminjamenTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('peminjamen', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->date('tanggal_pinjam')->nullable();
      $table->date('tanggal_kembali')->nullable();
      $table->string('status')->nullable();
      $table->integer('pegawai_id')->nullable()->unsigned();
      $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('peminjamen');
  }
}
