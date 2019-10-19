<?php 
	$id = $_GET['id'];
	$id = base64_decode($id);
	include "banco.php";

	$query = "select * from produto where idproduto = $id limit 1";

	$consulta = mysqli_query($con, $query);
	while($p  = mysqli_fetch_assoc($consulta)){
		$nomeprod = $p['nomeprod'];
	}
	echo "tem certeza que deseja apagar o item $nomeprod?";
	$ide = base64_encode($id);
	echo "<a href='index.php'>Não</a> - 
			<a href='excluir.php?id=$ide&c=1'>Sim</a>";
	if(isset($_GET['c'])){
		$query = "delete from produto where idproduto = $id";

		mysqli_query($con, $query);

		header("Location:admin.php");

	}
?>