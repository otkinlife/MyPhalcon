<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>工作台</title>
<link href="/themes/skin/css/style.css" rel="stylesheet" type="text/css" />
<script src="/themes/skin/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="/themes/skin/js/login.js" type="text/javascript"></script>
<script src="/themes/skin/js/jquery.jplaceholder.js" type="text/javascript"></script>
<body>
<div class="place">
	<span>位置：</span>
	<ul class="placeul">
		<li><a href="#">工作台</a></li>
	</ul>
</div>
<div class="mainindex">
	<div class="welinfo">
		<b><?php echo $this->session->userdata('username');?>(<?php echo $this->session->userdata('email');?>)，欢迎使用客户管理系统</b>
		<a href="<?php echo site_url('/config/password');?>">帐号设置</a>
	</div>
	<div class="welinfo">
		<span><img src="/themes/skin/images/time.png" alt="时间" /></span>
		<i>您上次登录的时间：<?=date('Y-m-d H:i:s', $this->session->userdata('lastlogin'));?></i> （不是您登录的？<a href="<?php echo site_url('/config/password');?>">请点这里</a>）
	</div>
	<div class="xline"></div>
	<div class="box"></div>
	<div class="welinfo">
		<span><img src="/themes/skin/images/dp.png" alt="提醒" /></span>
		<b>版本信息提醒</b>
			当前版本V1.0
	</div>
</div>
</body>
</html>
