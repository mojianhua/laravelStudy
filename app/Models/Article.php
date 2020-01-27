<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    //指定表里面的主键，如果不指定主键，默认是id,修饰词protected
    protected $primaryKey = 'id';
    //关联模型操作create_at和updated_at字段
    public $timestamps = false;

    //一对一关联操作,一个文章对应一个作者
    public function OneToOneAuthor(){
    	//$this->hasOne('需要关联模型的命名空间','被关联模型的字段','当前模型关联的字段');
    	return $this->hasOne('App\Models\Author','id','author_id');
    }

    //一对多关联操作，一个文章对应多个评论
    public function OneToManyComment(){
    	//$this->hasMany('需要关联模型的命名空间','被关联模型的字段','当前模型关联的字段');
    	return $this->hasMany('App\Models\Comment','article_id','id');
    }

    //多对多关联操作，多个文章对应多个关键字
    public function MamyToManyKeyword(){
    	//$this->belongsToMany('需要关联模型的命名空间','多对对模型关联表','当前模型关联的字段','被模型关联的字段');
    	return $this->belongsToMany('App\Models\Keyword','relation','article_id','key_id');
    }
}
