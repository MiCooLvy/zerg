<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/2
 * Time: 下午11:06
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPositiveInteger',
    ];

    protected $message = [
        'id' => 'id必须是正整数',
    ];
}