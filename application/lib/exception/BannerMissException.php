<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/3
 * Time: 下午3:30
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = 'Requested Banner is not found';
    public $errorCode = 30000;

}