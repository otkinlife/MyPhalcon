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
<script type="text/javascript" src="inc/add.js"></script>
<div>
<form method="post" action="save.php" name="frmAdd" onSubmit="return chkAspk(this);">
<input type="hidden" name="cmd" value="add" />
<input type="hidden" name="face" value="0" />
<input type="hidden" name="icon" value="0" />
  <h1>���ڴ˷�������ף������</h1>
  <div  id="AD" class="mesInfomation">
	<p class="p1">�û���֪��</p>
    <p>1.�����л����񹲺͹��йط��ɡ����棬�������ϵ��£��е�һ����������Ϊ��ֱ�ӻ�������ķ������Σ�<br />2.���ڱ���վ����������ݣ�������Ȩɾ�����ڱ���վ��ת�ء����ã�<br />3.�벻Ҫ�����κι���������ˮ����<br />4.�����֧��ף���ɵ��������ƹ㡣лл����֧�֣�</p>
  </div>
  <div id="Peview" class="Faceadd">
    <p class="Num">����Ԥ����<img src="images/close.gif" alt="�ر�" /></p>
	<p class="Detail"><img src="images/icon0.gif" alt="aspk" width="50" height="50" id="IconImg" /><span class="Head" id="Head"></span><br /><span id="AreaText"></span></p>
	<p class="Sign" id="Sign">����</p>
	<p class="Date"><script type="text/javascript">getTime();</script></p>
  </div>
  <div class="InputArea">
    <p class="p2">�� �� �ˣ�<input class="input" name="pick" type="text" size="20" maxlength="10" value=""   onkeyup="InputName(this,'Head');" /></p>
	<p class="p3">�� �� �ˣ�<input class="input" name="send" type="text" size="20" maxlength="10" onKeyUp="InputName(this,'Sign');" value="����" onClick="if(this.value =='����') this.value=''; "/></p>
	<p class="p4">ף�����ݣ�(<span class="red">* </span>��ʣ<span class="red" id="Char"> 30 </span>��)<textarea name="info" cols="25" rows="3" onKeyUp="strCounter(this);" onChange="strCounter(this);"></textarea></p>
  </div>
  <div class="Faceall">
  <p>ף��ͼ����</p>
	<p>
	  <img class="iconBox" src="images/icon0.gif" onClick="IconChange('0');" />
	  <img class="iconBox" src="images/icon1.gif" onClick="IconChange('1');" />
      <img class="iconBox" src="images/icon2.gif" onClick="IconChange('2');" />
      <img class="iconBox" src="images/icon3.gif" onClick="IconChange('3');" />
      <img class="iconBox" src="images/icon4.gif" onClick="IconChange('4');" />
      <img class="iconBox" src="images/icon5.gif" onClick="IconChange('5');" />
      <img class="iconBox" src="images/icon6.gif" onClick="IconChange('6');" />
      <img class="iconBox" src="images/icon7.gif" onClick="IconChange('7');" />
      <img class="iconBox" src="images/icon8.gif" onClick="IconChange('8');" />
      <img class="iconBox" src="images/icon9.gif" onClick="IconChange('9');" />
      <img class="iconBox" src="images/icon10.gif" onClick="IconChange('10');" />
      <img class="iconBox" src="images/icon11.gif" onClick="IconChange('11');" />
      <img class="iconBox" src="images/icon12.gif" onClick="IconChange('12');" />
      <img class="iconBox" src="images/icon13.gif" onClick="IconChange('13');" />
      <img class="iconBox" src="images/icon14.gif" onClick="IconChange('14');" />
	</p>
	<p class="p5"><input class="input" name="key" type="text" value="" size="6" maxlength="4" onfocus="this.value='';" /> <span class="red">*</span> ��������ͼ�е��ַ�<img src="inc/getcode.php" /> <br>
	<input class="inputb" name="submit" type="submit" value=" �� �� �� �� " /></p>
	</form>
  </div>
</div>
</div>
	
	
  </Div>
  <Div class="copyArea"><p>Copyright 2013-2015 <?php include("config.php"); echo $headname1; ?></p><a href="http://www.zhufu8.net/" target="_blank">ף����</a></Div>
</DIV>
</body>
</html>
</body>
</html>
