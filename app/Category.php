<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * 模型的日期字段的存储格式
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * 表字段
     *
     * @var array
     */
    protected $fillable = ['parent_id', 'name', 'path', 'description', 'image_url'];

    /**
     * 设置与文章的关联关系
     *
     * @return mixed
     */
    public function hasManyArticle()
    {
        return $this->hasMany(Article::class, 'category_id', 'id');
    }

}
