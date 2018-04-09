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
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('salutation_id')->unsigned()->nullable();
            $table->string('title')->default('Volunteer');
            $table->binary('profile_picture')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->integer('province_id')->unsigned()->nullable();
            $table->integer('country_id')->unsigned()->nullable();
            $table->string('postal_code', 9)->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->integer('phone_preference_id')->unsigned()->nullable();
            $table->integer('contact_preference_id')->unsigned()->nullable();
            $table->boolean('casl_agreement')->default(0);
            $table->date('casl_agreementDate');
            $table->boolean('is_admin')->default(0);
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
        Schema::drop('users');
    }
}
