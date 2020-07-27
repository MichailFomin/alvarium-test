<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('positions')->insert([
			[
				'position_name' => 'Manager',
				'rate' => 7000,
				'created_at' => now(),
			],
			[
				'position_name' => 'Director',
				'rate' => 10000,
				'created_at' => now(),
			],
			[
				'position_name' => 'Secretary',
				'rate' => 7000,
				'created_at' => now(),
			],
			[
				'position_name' => 'Assistant',
				'rate' => 6000,
				'created_at' => now(),
			],
		]);
    }
}
