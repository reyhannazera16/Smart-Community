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
      $table->string('X1');
      $table->string('X2');
      $table->string('X3');
      $table->string('X4');
      $table->string('X5');
      $table->string('X6');
      $table->string('X7');
      $table->string('X8');
      $table->string('X9');
      $table->string('X10');
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
