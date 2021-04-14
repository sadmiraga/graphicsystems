<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('model');
            $table->integer('price');
            $table->text('description');
            $table->string('condition');
            $table->integer('year');
            $table->string('machineType');
            $table->string('locationNote');

            $table->integer('inquiries')->default(0);
            $table->boolean('sold')->default(false);
            $table->text('metaTag')->nullable();

            $table->string('youtubeLink')->nullable();

            //category
            $table->unsignedInteger('categoryID')->unsigned();
            $table->foreign('categoryID')->references('id')->on('categories')->onDelete('cascade');

            //user
            $table->unsignedInteger('userID')->unsigned();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');

            //manufacturer
            $table->unsignedInteger('manufacturerID')->unsigned();
            $table->foreign('manufacturerID')->references('id')->on('manufacturers')->onDelete('cascade');


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
        Schema::dropIfExists('machines');
    }
}
