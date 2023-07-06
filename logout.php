<?php
session_start();

if(isset($_SESSION['username'])){
	session_destroy();

	echo "<script>location.href='officialogin.php'</script>";
}
else{
	echo "<script>location.href='official_login.php'</script>";
}




?>