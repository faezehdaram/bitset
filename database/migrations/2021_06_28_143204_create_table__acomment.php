<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAcomment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table__acomment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('text');
            $table->string('name');
            $table->unsignedBigInteger('articles_id');
            $table->foreign('articles_id')->references('id')->on('articles')->onUpdate('cascade')
                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__acomment');
    }
}
