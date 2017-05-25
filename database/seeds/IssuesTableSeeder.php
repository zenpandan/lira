<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class IssuesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		App\Models\Issue::create([
			'summary' => 'just a test issue',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu porttitor dolor. Suspendisse faucibus mi et luctus pulvinar. Curabitur posuere massa sit amet ante volutpat fermentum in vitae nibh. Duis malesuada vestibulum risus, ac maximus risus gravida at. Fusce vel mauris hendrerit, lobortis sem non, ullamcorper lorem.',
			'reporter' => 1,
			'asignee' => 1
		]);
		App\Models\Issue::create([
			'summary' => 'just a test issue 2',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu porttitor dolor. Suspendisse faucibus mi et luctus pulvinar. Curabitur posuere massa sit amet ante volutpat fermentum in vitae nibh. Duis malesuada vestibulum risus, ac maximus risus gravida at. Fusce vel mauris hendrerit, lobortis sem non, ullamcorper lorem.',
			'reporter' => 1,
			'asignee' => 1
		]);
	}
}
