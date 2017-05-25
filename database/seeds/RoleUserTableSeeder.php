<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoleUserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		App\Models\RoleUser::create([
			'role_id' => 1,
			'user_id' => 1,
			'project' => 1
		]);
	}
}
