<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'author';
    //指定表里面的主键，如果不指定主键，默认是id,修饰词protected
    protected $primaryKey = 'id';
    //关联模型操作create_at和updated_at字段
    public $timestamps = false;
}
