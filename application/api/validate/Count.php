<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/9
 * Time: 下午6:09
 */

namespace app\api\validate;


class Count extends BaseValidate
{
    protected $rule = [
        'count' => 'isPositiveInteger|between:1,15'
    ];
}