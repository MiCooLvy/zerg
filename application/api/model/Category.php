<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/9
 * Time: 下午6:46
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = ['topic_img_id', 'delete_time', 'update_time'];

    public function Img()
    {
        return $this->belongsTo('Image', 'topic_img_id', 'id');
    }
}