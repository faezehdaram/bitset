<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBcomment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table__bcomment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('text');
            $table->string('name');
            $table->unsignedBigInteger('projects_id');
            $table->foreign('projects_id')->references('id')->on('projects')->onUpdate('cascade')
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
        Schema::dropIfExists('table__bcomment');
    }
}
