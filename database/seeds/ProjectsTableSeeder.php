<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProjectsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		App\Models\Project::create([
			'name' => 'Lira Development Project',
			'description' => 'Administrator for projects',
	    	'key' => 'LIRA',
	    	'avatar' => 'poop',
	    	'type' => 1
		]);
	}
}
