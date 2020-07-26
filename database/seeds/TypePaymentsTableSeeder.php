<?php

use Illuminate\Database\Seeder;

class TypePaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('type_payments')->insert([
			[
				'type_name' => 'Hourly',
				'created_at' => now(),
			],
			[
				'type_name' => 'Monthly',
				'created_at' => now(),
			],
		]);
    }
}
