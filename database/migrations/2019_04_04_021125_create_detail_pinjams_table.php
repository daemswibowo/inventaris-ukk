<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailPinjamsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('detail_pinjams', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->integer('inventaris_id')->nullable()->unsigned();
      $table->integer('jumlah')->nullable();
      $table->integer('peminjaman_id')->nullable()->unsigned();
      $table->foreign('peminjaman_id')->references('id')->on('peminjamen')->onDelete('cascade');
      $table->foreign('inventaris_id')->references('id')->on('inventaris')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('detail_pinjams');
  }
}
