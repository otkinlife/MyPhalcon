<?
function set_writeable($file)
{if(is_writeable($file))
   echo"检测文件（夹）$file …… <strong>可写</strong><br>";
   else{
        echo"检测文件（夹）$file …… <strong>不可写</strong><br>正在改变权限 …… ";
        if(@chmod($file,0777))
		  echo"<strong>可写</strong><br>";
		  else
		  {echo"<strong>失败,请手动更改此文件访问权限！</strong><br>";
          exit;
          }
        }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>2015羊年春节贺卡祝福程序安装程序</title>
<link href="images/install.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-color: #FF9900;
}
input {
	font-size: 9pt;
	color: #FF0000;
	border: 1px solid #666666;
}
.style6 {color: #000000}
.style8 {font-size: 18pt; font-weight: bold; }
.style9 {color: #FF0000}
.style10 {font-size: 18pt; font-weight: bold; color: #FFFFFF; }
-->
</style>

<form name="form1" method="post" action="install.php?action=install">
  <table width="650" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#0000FF">
    <tr>
      <td height="695" valign="top" bgcolor="#CCCC66"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="32" bgcolor="#CC9900"><div align="center" class="style10">2015羊年春节贺卡祝福程序安装程序</div></td>
          </tr>
        </table>
<?php
if(isset($_GET['action'])&&$_GET['action']=="install")
{
if($_POST['servername']==""){
die("<script>alert('数据库地址不能为空！');history.back();</script>"); 
}	
if($_POST['dbname']==""){
die("<script>alert('数据库名称不能为空！');history.back();</script>"); 
}	
if($_POST['dbusername']=="") {
die("<script>alert('数据库用户名不能为空！');history.back();</script>"); 
}	
if($_POST['dbpass']==""){
die("<script>alert('数据库密码不能为空！');history.back();</script>"); 
}	
if(strlen($_POST['dbpass'])<3) {
die("<script>alert('数据库密码不能少于3位！');history.back();</script>"); 
}
$mydata=date("Y-m-d G:i:s");
###########开始安装程序
echo"<br>开始安装<br><br>";
 set_writeable("inc/coon.php");
 echo"配置数据库成功 …… ";
 echo "<br>";
  if(@$fp = fopen("inc/coon.php", "w"))
    {    $contents = "<?php\n";
        $contents  .= "\$servername=\"$_POST[servername]\";\n";
		$contents  .= "\$dbname=\"$_POST[dbname]\";\n";
		$contents  .= "\$dbusername=\"$_POST[dbusername]\";\n";
		$contents  .= "\$dbpass=\"$_POST[dbpass]\";\n";
		$contents  .= "\$db = mysql_connect(\$servername,\$dbusername,\$dbpass);\n";
		$contents  .= "mysql_query(\"set names'gb2312'\");\n";
		$contents  .= "if(!@mysql_select_db(\$dbname,\$db)) { die(\"数据库链接失败\"); }\n";
        $contents  .= "?>";
        fwrite($fp, $contents);
        fclose($fp);
		echo"<strong>成功</strong><br>";
      }
	 else
	   { echo"<strong>失败</strong><br>";
         exit;
       }
      include"inc/coon.php";
$md="SET SQL_MODE=\"NO_AUTO_VALUE_ON_ZERO\";
CREATE TABLE IF NOT EXISTS `edi_love` (
  `edi_id` int(10) NOT NULL auto_increment,
  `edi_class` int(10) NOT NULL,
  `edi_images` int(15) NOT NULL,
  `edi_head` varchar(16) character set gb2312 collate gb2312_bin NOT NULL,
  `edi_sign` varchar(16) character set gb2312 collate gb2312_bin NOT NULL,
  `edi_lr` text character set gb2312 collate gb2312_bin NOT NULL,
  `edi_date` varchar(30) NOT NULL,
  `edi_cs` int(10) NOT NULL default '0',
  PRIMARY KEY  (`edi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";

   $a_query = explode(";",$md);
   while (list(,$query) = each($a_query)) {
           $query = trim($query);
		   if ($query) {
               if (strstr($query,'CREATE TABLE')) {
                   ereg('CREATE TABLE ([^ ]*)',$query,$regs);
				   echo "正在建立表: ".$regs[1]." …… ";
				   if(mysql_query($query))
				      echo"<strong>成功</strong><br>";
					  else
					  {echo"<strong>失败</strong><br>
      "; exit;}} mysql_query($query); }}
unlink('install.php');
unlink('images/install.css');
echo "安装成功! 请返回网站首页并重新刷新页面，同时用FTP删除 install.php 文件";
exit;
 }?>
 <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td height="52" colspan="2" valign="bottom"> 　　　 <strong>安装说明</strong> 
            </td>
          </tr>
          <tr> 
            <td width="11%" height="25"><span class="style8"> ① </span></td>
            <td width="89%">欢迎使用<span class="style9">[2015羊年春节贺卡祝福序安装程序]</span><BR>
              本程序免费授权给网络中的朋友使用！</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">　　　<STRONG>设置文件夹权限</STRONG></td>
          </tr>
          <tr> 
            <td height="25"><span class="style8"> ② </span></td>
            <td height="25">请审核inc系统文件夹的权限是否为可写</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">　　　<STRONG>数据库设置</STRONG></td>
          </tr>
          <tr> 
            <td height="25" rowspan="4"><span class="style8"> ③</span></td>
            <td height="22">数据库地址： 
              <input name="servername" type="text" id="servername" value="localhost">
              * 一般不需更改</td>
          </tr>
          <tr> 
            <td height="22">数据库名称： 
              <input name="dbname" type="text" id="dbname">
              * 如不能自动创建，请手工创建</td>
          </tr>
          <tr> 
            <td height="22">用户名：　　 
              <input name="dbusername" type="text" id="dbusername" value="root">
              *</td>
          </tr>
          <tr> 
            <td height="18">密码：　　　 
              <input name="dbpass" type="text" id="dbpass">
            </td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td height="25" colspan="2"><div align="center"> 
                <input type="submit" name="Submit" value="填好了，开始安装！">
                　　 
                <input type="reset" name="Submit" value="等一下，好像填错了!">
              </div></td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
  <DIV align=center><BR>
    <span class="tdh style6">祝福吧<BR>
    Copyright &copy;2013-2015 www.zhufu8.net All rights reserve<BR>
    所有声音及图片来自于网络<BR>
    版权所有　<A href="http://www.zhufu8.net">祝福吧</A> </span></DIV>
</form>
