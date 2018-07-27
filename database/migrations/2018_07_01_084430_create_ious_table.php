<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ious', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('repayment_delay_unit');
            $table->integer('repayment_delay_value')->nullable();
            $table->string('repayment_repeat');
            $table->date('accepted_at')->nullable();
            $table->string('subject')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('borrower_id')->nullable();
            $table->string('compensation')->nullable();
            $table->string('currency');
            $table->string('initiated_by');
            $table->integer('lender_id')->nullable();
            $table->boolean('money_released')->nullable();
            $table->string('pdf')->nullable();
            $table->foreign('borrower_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lender_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ious');
    }
}
