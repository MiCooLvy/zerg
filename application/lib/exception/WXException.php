<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/9
 * Time: 下午10:51
 */

namespace app\lib\exception;


class WXException extends BaseException
{
    public $code = 400;
    public $msg = 'Fail to invoke WeChat API';
    public $errorCode = 999;
}