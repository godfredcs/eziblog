<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'firstname' => 'Godfred',
        	'lastname'	=> 'Addai',
        	'othernames'=> 'Boateng',
        	'email'		=> 'addaiz.godfred@gmail.com',
        	'password'	=> bcrypt('godfred')
        ]);

        DB::table('users')->insert([
        	'firstname' => 'Bismark',
        	'lastname'	=> 'Kwanin',
        	'email'		=> 'kwaninbismark@gmail.com',
        	'password'	=> bcrypt('bismark')
        ]);
    }
}
