<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/2
 * Time: 下午11:23
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    /**
     * @return bool
     * @throws ParameterException
     */
    public function goCheck()
    {
        // 获取http传入的参数
        // 对这些参数做校验
        $request = Request::instance();
        $params = $request->param();

        $result = $this->batch()->check($params);
        if (!$result) {
            throw new ParameterException([
                'msg' => $this->error
            ]);
        } else {
            return true;
        }
    }

    protected function isPositiveInteger($value, $rule = '', $data = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value) > 0) {
            return true;
        } else {
            return false;
        }
    }

}