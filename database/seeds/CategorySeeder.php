<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::insert([
        	[
        		'name'=>'Musique',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Informatique',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Electronique',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Education',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Voitures',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Moto',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Pantalons',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Telephones',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Agriculture',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Tourisme',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Chaussures',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Mecanique',
        		'icon' =>'fa fa-reorder'
        	],[
        		'name'=>'Divertissement',
        		'icon' =>'fa fa-reorder'
        	]
        ]);

    }
}
