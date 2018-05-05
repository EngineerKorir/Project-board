<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('username', 80);
            $table->string('email', 100)->unique();
            $table->string('phone', 20);
            $table->boolean('is_active')->default('1')->unsigned();
            $table->boolean('gender')->nullable()->unsigned();
            $table->text('bio')->nullable();
            $table->unsignedTinyInteger('role_id');
            $table->unsignedTinyInteger('hostel_id')->nullable();
            $table->unsignedTinyInteger('faculty_id')->nullable();
            $table->unsignedTinyInteger('department_id')->nullable();
            $table->unsignedTinyInteger('salutation_id')->nullable()->default('0');
            $table->date('dob')->nullable();
            $table->string('photo', 20)->nullable();
            $table->unsignedTinyInteger('year')->nullable();
            $table->string('password', 100);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
