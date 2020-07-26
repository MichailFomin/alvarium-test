<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		$this->call(DepartmentsTableSeeder::class);
		$this->call(PositionsTableSeeder::class);
		$this->call(TypePaymentsTableSeeder::class);
		$this->call(WorkersTableSeeder::class);
		$this->call(WorkTimeTableSeeder::class);
    }
}
