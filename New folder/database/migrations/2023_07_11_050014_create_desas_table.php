<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('desas', function (Blueprint $table) {
      $table->id();

      $table->string('nama_desa');
      $table->string('indeks');
      $table->string('potensi');
      $table->string('fasilitas');
      $table->string('umkm');
      $table->string('medis');
      $table->string('keamanan');
      $table->string('pembangunan');
      $table->string('penataan');
      $table->string('pengembangan');
      $table->string('transportasi');
      $table->string('bank');
      $table->string('internet');

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
    Schema::dropIfExists('desas');
  }
};
