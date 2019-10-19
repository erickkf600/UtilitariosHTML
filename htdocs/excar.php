<?php 
	$id = $_GET['idprod'];
	include "banco.php";
	mysqli_query($con, "delete from carrinho where idprod = $id");

	header("Location: carrinho.php");

?>