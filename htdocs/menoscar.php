<?php 
	$id = $_GET['idprod'];
	session_start();
	$email = $_SESSION['email'];
	include "banco.php";

	mysqli_query($con, "update carrinho set qtd = qtd-1 where idprod = $id and usuario = '$email'");

	$query = "select * from carrinho where usuario = '$email'";
	$consulta = mysqli_query($con, $query);

	while($c = mysqli_fetch_array($consulta)){
		$qtd = $c['qtd'];
		$iditem = $c['idcarrinho'];

		if($qtd == 0){
			mysqli_query($con, "delete from carrinho where idcarrinho = $iditem");
		}
	}


	header("Location: carrinho.php");
?>