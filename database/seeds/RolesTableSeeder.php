<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RolesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		App\Models\Role::create([
			'name' => 'Administrator',
			'description' => 'System Administrator'
		]);

		App\Models\Role::create([
			'name' => 'Project Lead',
			'description' => 'Project leader with administrative access to projects.'
		]);

		App\Models\Role::create([
			'name' => 'User',
			'description' => 'User for projects'
		]);

		App\Models\Role::create([
			'name' => 'Client',
			'description' => 'Client access'
		]);
	}
}
