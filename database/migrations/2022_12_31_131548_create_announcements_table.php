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
      Schema::create('announcements', function (Blueprint $table) {
          $table->id();
          $table->string('image');
          $table->string('title');
          $table->text('description');
          $table->date('start');
          $table->date('end');
          $table->string('place');
          $table->string('sponsorship');
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
        Schema::dropIfExists('announcements');
    }
};
