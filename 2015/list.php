<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="overflow-x:hidden;">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="Page-Enter" content="progid:DXImageTransform.Microsoft.GradientWipe(Duration=2)"/>
<meta http-equiv="Page-Exit" content="progid:DXImageTransform.Microsoft.GradientWipe(Duration=2)"/>
<title><?php include("config.php"); echo $headname1; ?></title>
<meta content="<?php include("config.php"); echo $headname2; ?>" name="Description" />
<style><!--@import url(images/css.css);--></style>
</head>
<body>
<DIV class="HeadStyle" id="header">
  <Div class="Nav">
    <ul style="list-style:none;">
      <li><a href="./">ף��ǽ��ҳ</a></li>
      <li><a href="add.php">��Ҫ��ף��</a></li>
      <li><a href="list.php">ף�������б�</a></li>
	  <li><a href="http://www.zhufu8.net/chunjie/" target="_blank">���괺��ף����</a></li>
	  <li><a href="http://www.zhufu8.net/duanxin/" target="_blank">����ף������</a></li>
	  <li class="lastItem">����ף�����̣��������Ҫ��ף����������Է����֣��������</li>
    </ul>
  </Div>
</DIV>
<div style="display:none;" id="aspk" onclick="Hide();"></div>
<DIV class="LeftContent">
  <p class="p1"></p>
  <p class="p2"></p>
  <p class="p3"></p>
  <p class="p4"></p>
  <p class="p5"></p>
  <p class="p6"></p>
  <p class="p7" onclick="document.location='add.php';" ></p>
  <p class="p8"></p>
  <p class="p9"></p>
  <p class="p10"></p>
  <p class="p11"></p>
</DIV>
<DIV class="RightContent">
  <Div class="mesArea">
    <div class="contrArea" id="menu">
	  <div class="Search">
	    <input id="find" name="id" class="input" type="text" maxlength="10" size="15" value=" ������������� " onclick="this.value='';" />
		<input type=submit  class="findbt" value="" lass="findbt" type="button" onclick="find();" > 
      </div>
<script type="text/javascript">
<!--
function find(){
	var noStr = document.getElementById("find").value;
	var no = parseInt(noStr);
	if(isNaN(no)){
		alert("[�������]�϶������ְ�");
		return;
	}else if(no < 1){
		alert("[�������]�϶���������");
		return;
	}else{
		window.location.href = "zhufu.php?id="+no;		
	}
}
//-->
</script>

	</div>
	<div class="messageArea" id="footer">
<table width="90%" align="center" border="0" cellpadding="0" cellspacing="1" class="List">
	<tr>
		<th>���</th>
		<th>��������</th>
		<th>������</th>
		<th>������</th>
		<th>����</th>
	</tr>
	<tr class="tr">
<?php 
include("inc/coon.php");
$limit=20;
$start=$_GET["start"];
if(empty($start)) $start=0; 
$result=mysql_query("select * from edi_love"); 
$num_max=mysql_numrows($result); 

$result=mysql_query("select * from edi_love order by edi_cs  DESC limit $start,$limit"); 
$num=mysql_numrows($result); 
for ($i=0;$i<$num;$i++) { 
$edi_id=mysql_result($result,$i,"edi_id");
$edi_class=mysql_result($result,$i,"edi_class"); 
$edi_images=mysql_result($result,$i,"edi_images"); 
$edi_head=mysql_result($result,$i,"edi_head");
$edi_sign=mysql_result($result,$i,"edi_sign");
$edi_lr=mysql_result($result,$i,"edi_lr");
$edi_date=mysql_result($result,$i,"edi_date");
$top =rand(110,418);
$left=rand(81,525)
?>
	<td class="ListA"><?=$edi_id?></td>
	<td class="ListB"><a href="zhufu.php?id=<?=$edi_id?>"><?=$edi_lr?></a></td>
	<td class="ListC"><?=$edi_sign?></td><td class="ListC"><?=$edi_head?></td><td class="ListD"><?=$edi_date?></td></tr>   
	<tr>
<?
}
?>
<td colspan="5" class="ListP">
<div align="right"><a href="list.php">��һҳ</a>
<? 
$prve=$start-$limit; 
if ($prve>=0) { 
echo "<a href=list.php?start=$prve>��һҳ</a>"; 
echo "   ";
} 
//�������ҳ����ת 
$next=$start+$limit; 
if ($next<$num_max) { 
echo "<a href=list.php?start=$next>��һҳ</a>"; 
} 
?>��<font color=red><?php echo "$num_max" ?></font>��ף��</div></td>
	</tr>
</table>

</div>
	
	
  </Div>
  <Div class="copyArea"><p>Copyright 2013-2015 <?php include("config.php"); echo $headname1; ?></p><a href="http://www.zhufu8.net/" target="_blank">ף����</a>
</DIV>
</body>
</html>
