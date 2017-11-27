<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateextravioReportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('extravio_reports', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->float('lat');
            $table->float('long');
            $table->string('address_street');
            $table->datetime('date');
            $table->datetime('open_date');
            $table->datetime('close_date');
            $table->integer('status');
            $table->integer('suburb_id');
            $table->boolean('identification_plate');
            $table->string('collar_color');
            $table->string('collar_color');
            $table->text('aditional_comments')->nullable();
            $table->integer('report_type_id')->nullable();
            $table->integer('pet_id');
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
		Schema::drop('extravio_reports');
	}

}
