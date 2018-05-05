<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->text('body');
            $table->boolean('status')->unsigned();
            $table->timestamp('deadline')->nullable();
            $table->unsignedSmallInteger('user_id');
            $table->unsignedSmallInteger('views')->default('0');
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
        Schema::dropIfExists('notices');
    }
}
