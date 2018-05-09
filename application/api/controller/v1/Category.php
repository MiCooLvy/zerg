<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/9
 * Time: 下午6:45
 */

namespace app\api\controller\v1;

use app\api\model\Category as CategoryModel;
use app\lib\exception\CategoryException;

class Category
{
    /**
     * @return \think\response\Json
     * @throws CategoryException
     * @throws \think\exception\DbException
     */
    public function getAllCategories()
    {
        $cate = CategoryModel::all([], 'img');
        if ($cate->isEmpty()) {
            throw new CategoryException();
        }
        return json($cate);
    }

}