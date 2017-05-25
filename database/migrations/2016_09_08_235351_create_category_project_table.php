<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryProjectTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_project', function (Blueprint $table) {
			$table->integer('category_id')->unsigned();
			$table->integer('project_id')->unsigned();

			$table->foreign('project_id')
				->references('id')->on('projects')
				->onDelete('restrict');

			$table->foreign('category_id')
				->references('id')->on('categories')
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
		Schema::dropIfExists('category_project');
	}
}
