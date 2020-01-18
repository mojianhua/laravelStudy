<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperTable extends Migration
{
    /**
     * Run the migrations.
     * 创建数据表
     * @return void
     */
    public function up()
    {
        Schema::create('paper', function (Blueprint $table) {
            # 创建自增主键
            $table->increments('id');
            # 试卷名称，唯一，varchar(100),不为空
            $table->string('paper_name',100)->notNull()->unique();
            # 试卷总分,tinyInt,默认100
            $table->tinyInteger('total_score')->default(100);
            # 考试开始时间，int类型，允许为空->nullable();
            $table->integer('start_time')->nullable();
            # 考试时间长度，单位分组，整形，tinyInt
            $table->tinyInteger('duration');
            # 考试状态，tinyint类型
            $table->tinyInteger('status')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     * 删除数据表，创建数据表的撤销操作
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paper');
    }
}
