<?php
  include("inc/coon.php");
  include("inc/number.php");
  $id=edi_convet($_GET["id"]);
  if( !$id) { 
die("<script>alert('��������');history.back();</script>"); 
}	
if(!ereg("[0-9-]",$id)){
die("<script>alert('��������뷵�����');history.back();</script>");
}
$result=mysql_query("select * from edi_love where edi_id='$id'"); 
$num=mysql_numrows($result); 
if($num==''){
die("<script>alert('��������뷵�����');history.back();</script>");
}
$edi_cs=mysql_result($result,0,"edi_cs");
$edi_cs=$edi_cs+1;
$query="UPDATE edi_love  SET edi_cs='$edi_cs' where edi_id='$id'";
$result = mysql_query($query);
echo '<SCRIPT language=JavaScript>alert("����ף���ѷ�����")</SCRIPT><meta http-equiv="refresh" content="0;URL=index.php">'; exit;
?>