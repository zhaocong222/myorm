<?php
/**
 * Created by PhpStorm.
 * User: zc
 * Date: 16-9-8
 * Time: 下午3:24
 */
$str = '1234\d5678';
//给正则表达式里面的 符号加上 \
echo preg_quote($str); //1234\\d5678