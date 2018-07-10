<?php

use Illuminate\Database\Seeder;
use App\complaintSubject;

class complaintSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ComplaintSubject::insert([
        	[
        	'name' => 'Inappropriate behaviour'
        	],
        	[
        	'name' => 'System bug'
        	],
        	[
        	'name' => 'Administration contacts'
        	],
        	[
        	'name' => 'Product'
        	]



        	]);

    }
}
