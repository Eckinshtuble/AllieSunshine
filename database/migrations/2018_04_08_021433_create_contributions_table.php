<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('anonymous')->default(0);
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('contributor')->nullable();
            $table->float('financial_contribution', 10, 2);
            $table->integer('payment_method_id')->unsigned()->nullable();
            $table->integer('tax_receipt_id')->unsigned()->nullable();
            $table->integer('thank_you_id')->unsigned()->nullable();
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
        Schema::dropIfExists('contributions');
    }
}
