<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 16-9-8
 * Time: 上午10:56
 */
require '../vendor/autoload.php';

use EasyWeChat\Foundation\Application;

$options = [
    'debug'=>true,
    'app_id'  => 'wx97c5a063fc7d1dea',         // AppID
    'secret'  => 'a19bf28534c7b625a500a060fe53b5ae',     // AppSecret
    'token'   => '4N1L9VuzfNbV4PKG',          // Token
    'aes_key' => '',                    // EncodingAESKey，安全模式下请一定要填写！！！

    'payment'=>[
        'merchant_id'        => 'your-mch-id',
        'key'                => 'key-for-signature',
        'cert_path'          => 'path/to/your/cert.pem', // XXX: 绝对路径！！！！
        'key_path'           => 'path/to/your/key',      // XXX: 绝对路径！！！！
    ],

    'guzzle'=>[
        'timeout'=>5,
    ]
];

$app = new Application($options);

