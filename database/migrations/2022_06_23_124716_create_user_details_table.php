<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('email');
            $table->string('bio','500')->default(' ')->nullable();
            $table->string('dob')->default(' ')->nullable();
            $table->string('address')->default(' ')->nullable();
            $table->string('gender')->default(' ')->nullable();
            $table->string('name')->default(' ')->nullable();
            $table->string('phone')->default(' ')->nullable();
            $table->string('profileImg')->default(' ')->nullable();
            $table->string('job')->default(' ')->nullable();
            $table->string('company_name')->default(' ')->nullable();
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
        Schema::dropIfExists('user_details');
    }
}
