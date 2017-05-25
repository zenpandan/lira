<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssueProjectTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('issue_project', function (Blueprint $table) {
			$table->integer('issue_id')->unsigned();
			$table->integer('project_id')->unsigned();
			$table->timestamps();

			$table->foreign('issue_id')
            ->references('id')->on('issues')
            ->onDelete('restrict');
			
			$table->foreign('project_id')
            ->references('id')->on('projects')
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
		Schema::dropIfExists('issue_project');
	}
}
