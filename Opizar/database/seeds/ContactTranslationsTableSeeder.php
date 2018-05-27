<?php

use Illuminate\Database\Seeder;

class ContactTranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts_translation')->insert(
			[
				[
					'contacts_id'  => '1',
					'locale'   	   => 'en',
					'ltd_name' 	   => 'OPIZARI LLC',
					'address' 	   => '22-24 k rtsanisi Street,block B,apt25,4th floor Tbilisi 0114',
					'country' 	   => 'Georgia'
				],
				[
					'contacts_id'  => '1',
					'locale'   	   => 'fr',
					'ltd_name' 	   => 'OPIZARI LLC',
					'address' 	   => '22-24 rue krtsanisi, bloc B, apt 25ème étage Tbilissi 0114',
					'country' 	   => 'Géorgie'
				],
				[
					'contacts_id'  => '1',
					'locale'   	   => 'jp',
					'ltd_name' 	   => 'OPIZARI LLC',
					'address' 	   => '22-24 krtsanisi 通り、ブロックB、アパート25,4階トビリシ 0114',
					'country' 	   => 'ジョージア州'
				]
			]
        );
    }
}
