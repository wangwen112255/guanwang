<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>ThinkLogin</title>
</head>
<body>
	<ul>
		<li><a href="<?php echo U('login?type=qq');?>">腾讯QQ用户登录</a></li>
		<li><a href="<?php echo U('login?type=sina');?>">新浪微博用户登录</a></li>
		<li><a href="<?php echo U('login?type=renren');?>">人人网用户登录</a></li>
		<li><a href="<?php echo U('login?type=x360');?>">360用户登录</a></li>
		<li><a href="<?php echo U('login?type=douban');?>">豆瓣用户登录</a></li>
		<li><a href="<?php echo U('login?type=github');?>">Github用户登录</a></li>
		<li><a href="<?php echo U('login?type=taobao');?>">淘宝网用户登录(用户信息要收费,坑)</a></li>
		<li><a href="<?php echo U('login?type=baidu');?>">百度用户登录(百度api看不懂,没做)</a></li>
	</ul>
</body>
</html>