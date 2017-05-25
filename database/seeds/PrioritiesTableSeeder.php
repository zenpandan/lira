<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PrioritiesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		App\Models\Priority::create([
			'name' => 'Trivial',
			'active' => true
		]);
		App\Models\Priority::create([
			'name' => 'Minor',
			'active' =>  true
		]);
		App\Models\Priority::create([
			'name' => 'Major',
			'active' => true
		]);
		App\Models\Priority::create([
			'name' => 'Critical',
			'active' =>  true
		]);
		App\Models\Priority::create([
			'name' => 'Blocker',
			'active' =>  true
		]);
	}
}
