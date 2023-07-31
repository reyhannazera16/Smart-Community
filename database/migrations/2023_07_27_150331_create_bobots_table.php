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
    Schema::create('bobots', function (Blueprint $table) {
      $table->id();
      $table->float('b1');
      $table->float('b2');
      $table->float('b3');
      $table->float('b4');
      $table->float('b5');
      $table->float('b6');
      $table->float('b7');
      $table->float('b8');
      $table->float('b9');
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
    Schema::dropIfExists('bobots');
  }
};
