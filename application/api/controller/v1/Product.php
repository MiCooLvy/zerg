<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/9
 * Time: 下午6:05
 */

namespace app\api\controller\v1;


use app\api\validate\Count;
use app\api\model\Product as ProductModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ProductMissException;

class Product
{
    public function getRecent($count = 15)
    {
        (new Count())->goCheck();
        $product = ProductModel::getMostRecent($count);
        if ($product->isEmpty()) {
            throw new ProductMissException();
        }

        $product = $product->hidden(['summary']);//临时隐藏
        return json($product);
    }

    public function getAllInCategories($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $products = ProductModel::getProductByCategoryID($id);
        if ($products->isEmpty()) {
            throw new ProductMissException();
        }
        $products = $products->hidden(['summary']);
        return json($products);
    }

}