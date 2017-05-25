<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusWorkflowTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('status_workflow', function (Blueprint $table) {
			$table->integer('workflow_id')->unsigned();
			$table->integer('status_id')->unsigned();

			$table->foreign('workflow_id')
				->references('id')->on('workflows')
				->onDelete('restrict');
		
			$table->foreign('status_id')
				->references('id')->on('status')
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
		Schema::dropIfExists('status_workflow');
	}
}
