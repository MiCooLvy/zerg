<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/9
 * Time: 下午5:16
 */

namespace app\lib\exception;


class ThemeMissException extends BaseException
{
    public $code = 404;
    public $msg = 'Requested Theme is not found';
    public $errorCode = 30000;
}