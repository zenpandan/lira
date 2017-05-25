<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		App\User::create([
			'Name' => 'Test McTesterson',
			'Email' => 'zenpandan@gmail.com',
			'password' => Hash::make('1234')
		]);
	}
}
