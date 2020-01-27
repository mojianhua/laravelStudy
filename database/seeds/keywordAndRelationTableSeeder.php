<?php

use Illuminate\Database\Seeder;

class keywordAndRelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keyword')->insert([
        	[
        		'keyword'=>'keyword'.rand(10,99)
        	],
        	[
        		'keyword'=>'keyword'.rand(100,999)
        	],
        	[
        		'keyword'=>'keyword'.rand(1,9)
        	],
        	[
        		'keyword'=>'keyword'.rand(10000,99999)
        	],
        ]);

        DB::table('relation')->insert([
        	[
        		'key_id'=>rand(1,4),
        		'article_id' => rand(1,3)
        	],
        	[
        		'key_id'=>rand(1,4),
        		'article_id' => rand(1,3)
        	],
        	[
        		'key_id'=>rand(1,4),
        		'article_id' => rand(1,3)
        	],
        ]);
    }
}
