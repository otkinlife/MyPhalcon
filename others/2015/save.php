<?php
	session_start();
  include("inc/coon.php");
  include("inc/number.php");
 	$edi_class=edi_convet($_POST["face"]);
 	$edi_images=edi_convet($_POST["icon"]);
 	$edi_head=edi_convet($_POST["pick"]);
 	$edi_sign=edi_convet($_POST["send"]);
 	$edi_lr=edi_convet($_POST["info"]);
 	$today = date("Y-m-d G:i:s");
	$yanzhengma=$_POST['key'];
if( !$edi_head || !$edi_sign || !$edi_lr ||!$yanzhengma) { 
die("<script>alert('���б�������д��');history.back();</script>"); 
}
if( strtolower($yanzhengma)!=strtolower($_SESSION['login_check_number'])) { 
die("<script>alert('��֤�����');history.back();</script>"); 
}
if(!ereg("[0-9-]",$edi_class)){
die("<script>alert('��������뷵�����');history.back();</script>");
}
if(!ereg("[0-9-]",$edi_images)){
die("<script>alert('��������뷵�����');history.back();</script>");
}
if(strlen($edi_head)>16 || strlen($edi_sign)>16){
die("<script>alert('�����˻�ף���������������뷵�����');history.back();</script>");
}
if(strlen($edi_lr)>140){
die("<script>alert('���������ݹ������뷵�����');history.back();</script>");
}
$sql = "INSERT INTO edi_love (edi_class,edi_images,edi_head,edi_sign,edi_lr,edi_date) VALUES ($edi_class,$edi_images,'$edi_head','$edi_sign','$edi_lr','$today')";   //����sql���
$result = mysql_query($sql);
echo '<SCRIPT language=JavaScript>alert("����ף���ѷ�����")</SCRIPT><meta http-equiv="refresh" content="0;URL=index.php">'; exit;
?>