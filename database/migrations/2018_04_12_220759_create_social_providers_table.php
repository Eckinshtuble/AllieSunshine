<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('social_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('name');
            $table->string('provider_id');
            $table->string('provider');
            $table->boolean('is_admin')->default(0);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_providers');
    }
}
