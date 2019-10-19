<?php 
    session_start();
	if(isset($_COOKIE['email']) or isset($_SESSION['email'])){
		if(isset($_SESSION['email'])){
			$email = $_SESSION['email'];
		}
		if(isset($_COOKIE['email'])){
			$email = $_COOKIE['email'];
		}
	}else{
		header("Location: index.php");
	}
	
	
	include "banco.php";
	$query = "select * from login where email = '$email' and senha = '$senha' limit 1";
	$consulta = mysqli_query($con, $query);
	 
	while($login = mysqli_fetch_array($consulta)){
		$nome = $login['usuario'];
	}
	header("Location:index.php");

?>