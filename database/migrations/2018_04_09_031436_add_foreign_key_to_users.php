<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('salutation_id')->references('id')->on('salutations')->onDelete('set null');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('set null');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
            $table->foreign('phone_preference_id')->references('id')->on('phone_preferences')->onDelete('set null');
            $table->foreign('contact_preference_id')->references('id')->on('contact_preferences')->onDelete('set null');
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
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
