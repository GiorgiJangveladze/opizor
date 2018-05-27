<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
			[
				'id'   =>1, 
				'phone_number'=>'599523234',
				'main_mail'=>'opizar@gmail.com',
				'footer_mail'=>'opizar@gmail.com'
			]
        );
    }
}
