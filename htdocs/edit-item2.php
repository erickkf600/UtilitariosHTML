<?php 
	$codprod   	= $_POST['codprod'];
	$categoria 	= $_POST['categoria'];
	$tipo      	= $_POST['tipo'];
	$nomeprod  	= $_POST['nomeprod'];
	$modelo    	= $_POST['modelo'];
	$fabricante = $_POST['fabricante'];
	$quantidade = $_POST['quantidade'];
	$preco 		= $_POST['preco'];

	include "banco.php";

	$query = "update produto 
				set codprod = '$codprod',
					categoria = '$categoria',
					tipo = $tipo,
					nomeprod = $nomeprod,
					modelo = $modelo,
					fabricante = $fabricante,
					quantidade = $quantidade,
					preco = $preco,
				where id = $id
			";

	mysqli_query($con, $query);

	header("Location: admin.php");
?>