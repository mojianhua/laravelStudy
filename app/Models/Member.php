<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //指定当前模型对应的表名,如果不写，会以为model文件名的复数作为表明，例如这个文件是member,如果不写会默认去找members表，修饰词：protected
    protected $table = 'member';
    //指定表里面的主键，如果不指定主键，默认是id,修饰词protected
    protected $primaryKey = 'mid';
    //关联模型操作create_at和updated_at字段
    public $timestamps = false;
    //定义$fillable属性，表示使用模型插入数据时，允许插入的字段
    protected $fillable = ['mid','name','email','age','avatar'];
    //$guarded设置排除入库的字段。

}
