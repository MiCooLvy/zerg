<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/3
 * Time: 下午4:46
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = 'Parameter Error';
    public $errorCode = 10000;


}