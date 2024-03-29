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
			$table->text('description')->nullable();
			$table->text('images')->nullable();
			$table->text('floor_plan')->nullable();
			$table->text('brochure')->nullable();
			$table->integer('layout_id')->unsigned()->index();
            $table->timestamps();
        });

		Schema::table('properties', function ($table) {
			$table->foreign('layout_id')->references('id')->on('layouts')->onDelete('cascade');
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
