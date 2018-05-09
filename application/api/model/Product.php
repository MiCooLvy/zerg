<?php

namespace app\api\model;


class Product extends BaseModel
{
    protected $hidden = ['delete_time', 'update_time', 'create_time', 'pivot', 'from', 'category_id'];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }

    public static function getMostRecent($count)
    {
        $pro = self::limit($count)->order('create_time desc')->select();
        return $pro;
    }

    public static function getProductByCategoryID($cate_id)
    {
        $prod = self::where('category_id', '=', $cate_id)->select();
        return $prod;
    }
}
