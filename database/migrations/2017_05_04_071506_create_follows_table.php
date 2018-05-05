<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('follows', function (Blueprint $table) {
          $table->mediumIncrements('id');
          $table->mediumInteger('user_id')->unsigned();
          $table->mediumInteger('follower')->unsigned();
          $table->boolean('status')->unsigned()->default(1);
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
        Schema::dropIfExists('follows');
    }
}
