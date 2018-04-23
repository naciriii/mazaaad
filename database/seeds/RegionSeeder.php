<?php

use Illuminate\Database\Seeder;
use App\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Region::insert([
    ['name' => 'Ariana'],	
	['name' => 'Beja'],
	['name' => 'Ben Arous'], 	
	['name' => 'Bizerte'],	
	['name' => 'Gabès'],	
	['name' => 'Gafsa'],	
	['name' => 'Jendouba'],	
	['name' => 'Kairouan'],	
	['name' => 'Kasserine'],	
	['name' => 'Kebili'],	
	['name' => 'Kef'],	
	['name' => 'Mahdia'],	
	['name' => 'Manouba'],	
	['name' => 'Medenine'],	
	['name' => 'Monastir'],	
	['name' => 'Nabeul'],	
	['name' => 'Sfax'],	
	['name' => 'Sidi Bouzid'], 
	['name' => 'Siliana'],	
	['name' => 'Sousse'],	
	['name' => 'Tataouine'],	
	['name' => 'Tozeur'],
	['name' => 'Tunis'],	
	['name' => 'Zaghouan']
]
);

    }
}
