<?php

use Illuminate\Database\Seeder;

class ArticleAndAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('article')->insert([
        	[
        		'article_name'=>'阿吉文章'.rand(10,99),
        		'author_id' => rand(1,3)
        	],
        	[
        		'article_name'=>'阿吉文章'.rand(100,999),
        		'author_id' => rand(1,3)
        	],
        	[
        		'article_name'=>'阿吉文章'.rand(1,9),
        		'author_id' => rand(1,3)
        	],
        ]);

        DB::table('author')->insert([
        	[
        		'author_name' => '阿吉'.rand(1,9),
        	],
        	[
        		'author_name' => '阿吉'.rand(10,99),
        	],
        	[
        		'author_name' => '阿吉'.rand(100,999),
        	],
        ]);
    }
}
