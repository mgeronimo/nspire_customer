<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOcZoneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oc_zone', function(Blueprint $table)
		{
			$table->integer('zone_id', true);
			$table->integer('country_id');
			$table->string('name', 128);
			$table->string('code', 32);
			$table->boolean('status')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oc_zone');
	}

}
