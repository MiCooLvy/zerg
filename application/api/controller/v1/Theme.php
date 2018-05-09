<?php

namespace app\api\controller\v1;


use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\api\validate\IDMustBePositiveInt;
use app\lib\exception\ThemeMissException;

class Theme
{
    /**
     * @url /theme?ids=id1,id2,id3,...
     * @return string 一组规则
     * @param string $ids
     * @throws ThemeMissException
     * @throws \app\lib\exception\ParameterException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getSimpleList($ids = '')
    {
        (new IDCollection)->goCheck();
        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg,headImg')->select($ids);
        if ($result->isEmpty()) {
            throw new ThemeMissException();
        }
        return json($result);
    }

    public function getComplexOne($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $theme = ThemeModel::getThemeWithProduct($id);
        return json($theme);
    }
}
