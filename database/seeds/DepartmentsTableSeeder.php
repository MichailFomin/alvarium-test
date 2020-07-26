<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('departments')->insert([
			[
				'department_name' => 'First department',
				'created_at' => now(),
			],
			[
				'department_name' => 'Second department',
				'created_at' => now(),
			],
			[
				'department_name' => 'Third department',
				'created_at' => now(),
			],
			[
				'department_name' => 'Fourth department',
				'created_at' => now(),
			],
		]);
    }
}
