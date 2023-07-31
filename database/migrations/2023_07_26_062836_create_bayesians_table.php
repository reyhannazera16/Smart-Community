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
    Schema::create('bayesians', function (Blueprint $table) {
      $table->id();
      $table->string('desa');
      $table->string('D1');
      $table->string('D2');
      $table->string('D3');
      $table->string('D4');
      $table->string('D5');
      $table->string('D6');
      $table->string('D7');
      $table->string('D8');
      $table->string('D9');
      $table->string('Bobot');
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
    Schema::dropIfExists('bayesians');
  }
};
