<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatepetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::defaultStringLength(191);
		Schema::create('pets', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('color');
            $table->integer('gender');
            $table->integer('obtainment');
            $table->boolean('is_sterilized');
            $table->integer('user_id');
            $table->integer('pettype_id');
            $table->datetime('birthday')->nullable();
            $table->float('weight')->nullable();
            $table->integer('size')->nullable();
            $table->text('particular_signs')->nullable();
            $table->datetime('acquisition_date')->nullable();
            $table->string('microchip')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('photo3')->nullable();
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
		Schema::drop('pets');
	}

}
