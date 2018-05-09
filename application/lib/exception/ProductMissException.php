<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/9
 * Time: 下午6:20
 */

namespace app\lib\exception;


class ProductMissException extends BaseException
{
    public $code = 404;
    public $msg = 'Requested Product is not found';
    public $errorCode = 30000;
}