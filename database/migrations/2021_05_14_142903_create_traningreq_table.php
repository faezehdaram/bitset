<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraningreqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traningreq', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('education_id');
            $table->foreign('education_id')->references('id')->on('education')->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->string('data');
            $table->unsignedBigInteger('payment');
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
        Schema::dropIfExists('traningreq');
    }
}
