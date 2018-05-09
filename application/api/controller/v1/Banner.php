<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/2
 * Time: 下午10:26
 */

namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\BannerMissException;

class Banner
{
    /**
     * @param $id
     * @return \think\response\Json
     * @throws BannerMissException
     * @throws \app\lib\exception\ParameterException
     */
    public function getBanner($id)
    {
        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);
        if (!$banner) {
            throw new BannerMissException();
        }
        return json($banner);

    }

}