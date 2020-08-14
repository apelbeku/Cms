<?php

use Illuminate\Database\Seeder;
use App\Model\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Category::truncate();

    	Category::create([
    		'name' => 'model',
    	]);

    	Category::create([
    		'name' => 'nature',
    	]);


    	Category::create([
    		'name' => 'design',
    	]);
    }
}
