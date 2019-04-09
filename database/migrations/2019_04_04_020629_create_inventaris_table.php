<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventarisTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('inventaris', function (Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->string('nama')->nullable();
      $table->string('kondisi')->nullable();
      $table->string('keterangan')->nullable();
      $table->integer('jumlah')->nullable();
      $table->integer('jenis_id')->nullable()->unsigned();
      $table->integer('ruang_id')->nullable()->unsigned();
      $table->string('kode_inventaris')->nullable();
      $table->bigInteger('user_id')->nullable()->unsigned();

      $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('cascade');
      $table->foreign('ruang_id')->references('id')->on('ruangs')->onDelete('cascade');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::drop('inventaris');
  }
}
