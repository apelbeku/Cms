<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
        	'name' => 'admin',
        	'email' => 'admin@admin',
        	'password' => bcrypt('secret'),
        	'role' => 'admin',
        ]);

        User::create([
        	'name' => 'author',
        	'email' => 'author@author',
        	'password' => bcrypt('secret'),
        	'role' => 'author',
        ]);

        User::create([
        	'name' => 'editor',
        	'email' => 'editor@editor',
        	'password' => bcrypt('secret'),
        	'role' => 'editor',
        ]);
    }
}
