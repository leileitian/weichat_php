<?php
@header('Content-type: text/html;charset=UTF-8');

require "config.php";
require "include/WeiXin.php";

$weiXin = new WeiXin($G_CONFIG['weiXin']);

//$testFakeId = "1477341522";
//$testFakeId="19909935";
//$testFakeId02="320194360";//魏远超
//$testFakeId2 = "2158620204";
//$testFakeId01="1694631462";//做活动的
$testFakeId="19909935";//a1655909198
$testFakeId03="1717242443";


//if($testFakeId!=null){
	// 发送消息
	//print_r($weiXin->send($testFakeId, "你好，很高兴见到你！收到自动推送的信息了吗？"));
//}else{
	//print_r("发送消息错误！");
//}

//if($testFakeId01!=null){
	// 发送消息
	//print_r($weiXin->send($testFakeId01, "你好，很高兴见到你！"));
//}else{
	//print_r("发送消息错误！");
//}


	print_r($weiXin->send($testFakeId, "亲，阿卡迪亚有新活动了，我和我的小伙伴们都惊呆了/:,@P!具体的详细信息请访问我们的网址:http://acadiasz.com"));

	//while($testFakeId){
		//$i=1;
		//for($i;$i<999;$i++){
			// 发送消息
			
		//}
	//}


	
			// 发送消息
			print_r($weiXin->send($testFakeId03, "亲，阿卡迪亚有新活动了，我和我的小伙伴们都惊呆了/:,@P!具体的详细信息请访问我们的网址:http://acadiasz.com"));


	
	
	print_r("============>>");

	//print_r($weiXin->getUserLIst($testFakeId));

	

	// 发送消息
	//print_r($weiXin->send($testFakeId02, "亲，阿卡迪亚有新活动了，我和我的小伙伴们都惊呆了/:,@P!具体的详细信息请访问我们的网址:http://acadiasz.com"));

// 发送消息
//print_r($weiXin->send($testFakeId, "你好，很高兴见到你！aaaaaaaaaaaaaaaaaaaa"));

// 发送消息
//print_r($weiXin->send($testFakeId, "你好，很高兴见到你！aaaaaaaaaaaaaaaaaaaa"));

print_r("发送消息======>");

// 发送图片, 图片必须要先在公共平台中上传, 得到图片Id
print_r($weiXin->sendImage($testFakeId, "10000001"));


print_r("发送图片");

// 批量发送
print_r($weiXin->batSend(array($testFakeId, $testFakeId03), "测试批量发送!"));

print_r("批量发送");

// 得到用户信息
print_r($weiXin->getUserInfo($testFakeId));


print_r("得到用户信息");

// 得到最新消息
print_r($weiXin->getLatestMsgs());


print_r("得到最新消息aaaaaaaaaa");

