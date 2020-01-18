<?php

use Illuminate\Database\Seeder;

class PaperTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //写入数据
        $data = [
        	[
        		'paper_name' => '试卷名称1',
        		'start_time' => strtotime('+7 days'),
        		'duration'   => 120,
         	],
         	[
        		'paper_name' => '试卷名称2',
        		'start_time' => strtotime('+14 days'),
        		'duration'   => 90,
         	]
        ];

        //写入数据
        DB::table('paper')->insert($data);
    }
}
