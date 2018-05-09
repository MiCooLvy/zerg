<?php
/**
 * 微信相关配置
 * Created by PhpStorm.
 * User: wangkai
 * Date: 2018/5/9
 * Time: 下午10:21
 */
return [
    //小程序AppID
    'app_id'                => 'wxa697d15c1c7a24e9',
    //小程序AppSecret
    'app_secret'            => '67a9713994299cd65a916ed5adc22611',
    //微信验证服务器
    'login_url'             => "https://api.weixin.qq.com/sns/jscode2session?" .
        "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code"
];
