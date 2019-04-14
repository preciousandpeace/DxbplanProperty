<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('name');
			$table->string('slug')->unique();
			$table->integer('price');
			$table->text('description');
			$table->string('image')->nullable()->default('04');
			$table->text('images')->nullable();
			$table->integer('layout_id')->unsigned()->index();
            $table->timestamps();
        });

		Schema::table('properties', function ($table) {
			$table->foreign('layout_id')->references('id')->on('layouts');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
