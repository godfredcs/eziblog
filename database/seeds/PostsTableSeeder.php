<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	'user_id'=> 1,
        	'title'	=> 'Godfred\'s Post',
        	'body'	=> 'This is Godfred\'s contribution to the project. This is a start and so you would have to bear with us for it being very brief.'
        ]);

        DB::table('posts')->insert([
        	'user_id'	=> 2,
        	'title'		=> 'Bismark\'s Contribution',
        	'body'		=> 'This is Bismark\'s post to support his claim that the Bible that orthodox churches use are not up to date. He will be here live at 8:00am to give us an enlightened introduction into the matter.'
        ]);
    }
}
