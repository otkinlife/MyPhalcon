<?php 
	session_start();
	session_unregister();
	session_destroy();
	echo "<script>top.location.href='/login.php';</script>"; 
?>