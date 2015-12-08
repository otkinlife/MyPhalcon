<?php
$servername="localhost";
$dbname="";
$dbusername="";
$dbpass="";
$db = mysql_connect($servername,$dbusername,$dbpass);
mysql_query("set names'gb2312'");
if(!@mysql_select_db($dbname,$db)) { die("Êý¾Ý¿âÁ´½ÓÊ§°Ü"); }
?>