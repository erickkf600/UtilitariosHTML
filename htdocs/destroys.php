<?php
setcookie("email", "", time()-1);
	session_start();
	session_destroy();

	header("Location: index.php");

?>