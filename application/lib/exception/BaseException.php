<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/3
 * Time: 下午3:27
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    // HTTP 状态码 404，400，200，...
    public $code = 400;
    // 错误信息
    public $msg = 'Parameter Error';
    // 自定义错误码
    public $errorCode = 10000;

    public function __construct($params = [])
    {
        if (!is_array($params)) {
            return;
//            throw new Exception('参数必须是数组');
        }
        if (array_key_exists('code', $params)) {
            $this->code = $params['code'];
        }
        if (array_key_exists('msg', $params)) {
            $this->msg = $params['msg'];
        }
        if (array_key_exists('errorCode', $params)) {
            $this->errorCode = $params['errorCode'];
        }

//        parent::__construct($message, $code, $previous);
    }

}