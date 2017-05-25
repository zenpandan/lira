<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ResolutionsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		App\Models\Resolution::create([
			'name' => 'Fixed',
			'description' => ''
		]);
		App\Models\Resolution::create([
			'name' => "Won't fix",
			'description' => ''
		]);
		App\Models\Resolution::create([
			'name' => 'Duplicate',
			'description' => ''
		]);
		App\Models\Resolution::create([
			'name' => 'Incomplete',
			'description' => ''
		]);
		App\Models\Resolution::create([
			'name' => 'Cannot reproduce',
			'description' => ''
		]);
		App\Models\Resolution::create([
			'name' => 'Done',
			'description' => ''
		]);
		App\Models\Resolution::create([
			'name' => "Won't do",
			'description' => ''
		]);
	}
}
