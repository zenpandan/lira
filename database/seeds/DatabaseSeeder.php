<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(UsersTableSeeder::class);
		$this->call(RolesTableSeeder::class);
		$this->call(RoleUserTableSeeder::class);
		$this->call(StatusTableSeeder::class);
		$this->call(PrioritiesTableSeeder::class);
		$this->call(ResolutionsTableSeeder::class);
		$this->call(ProjectsTableSeeder::class);
		$this->call(IssuesTableSeeder::class);
	}
}
