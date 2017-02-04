<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMutualfundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('mutualfunds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('description');
            $table->string('symbol');
            $table->integer('share');
            $table->integer('purchased_value');
            $table->date('purchased_date');
            $table->integer('recent_value');
            $table->date('recent_date');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('mutualfunds', function (Blueprint $table) {
           $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mutualfunds');
    }
}
