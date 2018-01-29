<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateadoptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::defaultStringLength(191);
		Schema::create('adoptions', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->datetime('open_date');
            $table->datetime('close_date');
            $table->integer('status');
            $table->text('description')->nullable();
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
		Schema::drop('adoptions');
	}

}
