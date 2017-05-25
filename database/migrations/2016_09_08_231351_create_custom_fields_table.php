<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomFieldsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_fields', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('label');
			$table->integer('type')->unsigned();
			$table->timestamps();

			$table->foreign('type')
				->references('id')->on('custom_field_types')
				->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('custom_fields');
	}
}
