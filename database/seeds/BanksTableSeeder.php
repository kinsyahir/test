<?php

use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('bank')->insert([
        	'card_number' => '9876543210987654',
        	'MM' => '05',
        	'YYYY' => '23',
        	'security_code' => '123',
        	'card_name' => 'nik syahir',
        	'bank_balance' => '95635.08',
        ]);
    }
}
