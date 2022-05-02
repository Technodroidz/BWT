<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=App\Category::create([
        	'name'=>'Main Category',
        	'slug'=>'main_category',
        	'parent_id'=>'0',
        	'child_id'=>'0',
        	'thumbnail'=>'default.png',
        	'position'=>'0',
        	'active'=>'1',
        ]);
    }
}
