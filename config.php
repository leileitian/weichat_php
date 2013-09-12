<?php

// 全局配置

$G_ROOT = dirname(__FILE__);

$G_CONFIG["weiXin"] = array(
	'account' => '2326782922@qq.com',
	'password' => 'leilei2022236',

	//'account' => 'sheng_sen@hotmail.com',
	//'password' => 'sheng980711',
	'cookiePath' => $G_ROOT. '/cache/cookie', // cookie缓存文件路径
	'webTokenPath' => $G_ROOT. '/cache/webToken', // webToken缓存文件路径
);
