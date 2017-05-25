<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('role_user', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('role_id')->unsigned();
			$table->integer('project_id')->unsigned();
			$table->timestamps();

			$table->foreign('user_id')
				->references('id')->on('users')
				->onDelete('restrict');
			
			$table->foreign('role_id')
				->references('id')->on('roles')
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
		Schema::dropIfExists('role_user');
	}
}
