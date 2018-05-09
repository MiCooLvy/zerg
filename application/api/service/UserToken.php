<?php
/**
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/9
 * Time: 下午10:11
 */

namespace app\api\service;


use app\lib\exception\WXException;
use think\Exception;

class UserToken
{
    protected $code;
    protected $wxAppID;
    protected $wxAppSecret;
    protected $wxLoginUrl;

    public function __construct($code)
    {
        $this->code = $code;
        $this->wxAppID = config('wxConfig.app_id');
        $this->wxAppSecret = config('wxConfig.app_secret');
        $this->wxLoginUrl = sprintf(config('wxConfig.login_url'),
            $this->wxAppID, $this->wxAppSecret, $this->code);

    }


    public function get()
    {
        $result = curl_get($this->wxLoginUrl);
        $wxResult = json_decode($result, true);
        if (empty($wxResult)) {
            throw new Exception('获取session_key及openID时异常，微信内部错误');
        } else {
            $loginFail = array_key_exists('errcode', $wxResult);
            if ($loginFail) {
                $this->processLoginError($wxResult);
            } else {
                $this->grantToken($wxResult);
            }
        }
        return $wxResult;
    }

    private function processLoginError($wxResult)
    {
        throw new WXException([
            'msg' => $wxResult['errmsg'],
            'errorCode' => $wxResult['errcode'],
        ]);
    }

    private function grantToken($wxResult)
    {
        //拿到openid， 数据库里看一下openID是否已经存在
        //如果存在则不处理，如果不存在则新增一条user记录
        //生成令牌，写入缓存
        //把令牌返回到客户端
        $openId = $wxResult['openid'];
    }

}