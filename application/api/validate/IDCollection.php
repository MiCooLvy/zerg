<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/8
 * Time: 下午10:23
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected $message = [
        'ids' => 'ids参数必须是已逗号分隔的正整数'
    ];

    /**
     * @value ids
     */
    protected function checkIDs($value)
    {
        $rst = true;
        $values = explode(',', $value);
        if (empty($values)) {
            $rst = false;
        }
        foreach ($values as $id) {
            if (!$this->isPositiveInteger($id)) {
                $rst = false;
            }
        }
        return $rst;
    }
}