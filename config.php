<?php
date_default_timezone_set('PRC');
//配置项如果有多个，用;隔开

//config.php
//配置项如果有多个用;隔开
//账号,多个账号用;隔开
define('USER', '****@lexinfintech.com;***@lexinfintech.com;');
//密码
define('PASSWORD', '****;****;');
//选择，周一到周五，用,隔开
define('CHOICE', '69463546,69463546,69463546,69463546,69450031;69400482,69478131,69373084,69451271,69451272;');
//是否随机，选择数量不等于5，就算不选择也是随机
define('RANDOM', '1;0;');
//邮箱，订餐成功与否都发邮件,为空就不发
define('EMAIL', '***@qq.com;***@qq.com;');
