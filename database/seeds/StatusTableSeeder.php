<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StatusTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		App\Models\Status::create([
			'name' => 'Waiting for support',
			'description' => ''
		]);
		App\Models\Status::create([
			'name' => 'Waiting for customer',
			'description' => ''
		]);
		App\Models\Status::create([
			'name' => 'In review',
			'description' => ''
		]);
		App\Models\Status::create([
			'name' => 'Resolved',
			'description' => ''
		]);
		App\Models\Status::create([
			'name' => 'Closed',
			'description' => ''
		]);
	}
}
