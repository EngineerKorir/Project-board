<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
          $table->mediumIncrements('id');
          $table->string('name', 80)->unique();
          $table->unsignedInteger('size');
          $table->unsignedSmallInteger('user_id');
          $table->boolean('context')->unsigned();
          $table->unsignedMediumInteger('content_id');
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
        Schema::dropIfExists('attachments');
    }
}
