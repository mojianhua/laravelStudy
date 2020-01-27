<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
        	[
        		'comment'=>'内容'.rand(10,99),
        		'article_id' => rand(1,3)
        	],
        	[
        		'comment'=>'内容'.rand(100,999),
        		'article_id' => rand(1,3)
        	],
        	[
        		'comment'=>'内容'.rand(1,9),
        		'article_id' => rand(1,3)
        	],
        ]);
    }
}
