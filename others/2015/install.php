<?
function set_writeable($file)
{if(is_writeable($file))
   echo"����ļ����У�$file ���� <strong>��д</strong><br>";
   else{
        echo"����ļ����У�$file ���� <strong>����д</strong><br>���ڸı�Ȩ�� ���� ";
        if(@chmod($file,0777))
		  echo"<strong>��д</strong><br>";
		  else
		  {echo"<strong>ʧ��,���ֶ����Ĵ��ļ�����Ȩ�ޣ�</strong><br>";
          exit;
          }
        }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>2015���괺�ںؿ�ף������װ����</title>
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
            <td height="32" bgcolor="#CC9900"><div align="center" class="style10">2015���괺�ںؿ�ף������װ����</div></td>
          </tr>
        </table>
<?php
if(isset($_GET['action'])&&$_GET['action']=="install")
{
if($_POST['servername']==""){
die("<script>alert('���ݿ��ַ����Ϊ�գ�');history.back();</script>"); 
}	
if($_POST['dbname']==""){
die("<script>alert('���ݿ����Ʋ���Ϊ�գ�');history.back();</script>"); 
}	
if($_POST['dbusername']=="") {
die("<script>alert('���ݿ��û�������Ϊ�գ�');history.back();</script>"); 
}	
if($_POST['dbpass']==""){
die("<script>alert('���ݿ����벻��Ϊ�գ�');history.back();</script>"); 
}	
if(strlen($_POST['dbpass'])<3) {
die("<script>alert('���ݿ����벻������3λ��');history.back();</script>"); 
}
$mydata=date("Y-m-d G:i:s");
###########��ʼ��װ����
echo"<br>��ʼ��װ<br><br>";
 set_writeable("inc/coon.php");
 echo"�������ݿ�ɹ� ���� ";
 echo "<br>";
  if(@$fp = fopen("inc/coon.php", "w"))
    {    $contents = "<?php\n";
        $contents  .= "\$servername=\"$_POST[servername]\";\n";
		$contents  .= "\$dbname=\"$_POST[dbname]\";\n";
		$contents  .= "\$dbusername=\"$_POST[dbusername]\";\n";
		$contents  .= "\$dbpass=\"$_POST[dbpass]\";\n";
		$contents  .= "\$db = mysql_connect(\$servername,\$dbusername,\$dbpass);\n";
		$contents  .= "mysql_query(\"set names'gb2312'\");\n";
		$contents  .= "if(!@mysql_select_db(\$dbname,\$db)) { die(\"���ݿ�����ʧ��\"); }\n";
        $contents  .= "?>";
        fwrite($fp, $contents);
        fclose($fp);
		echo"<strong>�ɹ�</strong><br>";
      }
	 else
	   { echo"<strong>ʧ��</strong><br>";
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
				   echo "���ڽ�����: ".$regs[1]." ���� ";
				   if(mysql_query($query))
				      echo"<strong>�ɹ�</strong><br>";
					  else
					  {echo"<strong>ʧ��</strong><br>
      "; exit;}} mysql_query($query); }}
unlink('install.php');
unlink('images/install.css');
echo "��װ�ɹ�! �뷵����վ��ҳ������ˢ��ҳ�棬ͬʱ��FTPɾ�� install.php �ļ�";
exit;
 }?>
 <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td height="52" colspan="2" valign="bottom"> ������ <strong>��װ˵��</strong> 
            </td>
          </tr>
          <tr> 
            <td width="11%" height="25"><span class="style8"> �� </span></td>
            <td width="89%">��ӭʹ��<span class="style9">[2015���괺�ںؿ�ף����װ����]</span><BR>
              �����������Ȩ�������е�����ʹ�ã�</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">������<STRONG>�����ļ���Ȩ��</STRONG></td>
          </tr>
          <tr> 
            <td height="25"><span class="style8"> �� </span></td>
            <td height="25">�����incϵͳ�ļ��е�Ȩ���Ƿ�Ϊ��д</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td height="25" colspan="2">������<STRONG>���ݿ�����</STRONG></td>
          </tr>
          <tr> 
            <td height="25" rowspan="4"><span class="style8"> ��</span></td>
            <td height="22">���ݿ��ַ�� 
              <input name="servername" type="text" id="servername" value="localhost">
              * һ�㲻�����</td>
          </tr>
          <tr> 
            <td height="22">���ݿ����ƣ� 
              <input name="dbname" type="text" id="dbname">
              * �粻���Զ����������ֹ�����</td>
          </tr>
          <tr> 
            <td height="22">�û��������� 
              <input name="dbusername" type="text" id="dbusername" value="root">
              *</td>
          </tr>
          <tr> 
            <td height="18">���룺������ 
              <input name="dbpass" type="text" id="dbpass">
            </td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td height="25" colspan="2"><div align="center"> 
                <input type="submit" name="Submit" value="����ˣ���ʼ��װ��">
                ���� 
                <input type="reset" name="Submit" value="��һ�£����������!">
              </div></td>
          </tr>
          <tr> 
            <td height="25" colspan="2">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
  <DIV align=center><BR>
    <span class="tdh style6">ף����<BR>
    Copyright &copy;2013-2015 www.zhufu8.net All rights reserve<BR>
    ����������ͼƬ����������<BR>
    ��Ȩ���С�<A href="http://www.zhufu8.net">ף����</A> </span></DIV>
</form>
