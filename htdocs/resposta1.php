<?php 
	$id = $_POST['id'];
	$nome = strip_tags($_POST['nome']);
	$email = strip_tags($_POST['email']);
	$telefoneFixo = strip_tags($_POST['telresid']);
	$telefoneCel = strip_tags($_POST['cel']);

	$cep = strip_tags($_POST['cep']);
	$endereco = strip_tags($_POST['endereco']);
	$cidade = strip_tags($_POST['cidade']);
	$bairro = strip_tags($_POST['bairro']);

	$cpf = strip_tags($_POST['cpf']);
	$usuario = strip_tags($_POST['usuario']);
	$senha = md5(strip_tags($_POST['senha']));


	include "banco.php";

	$query = "update login 
				set usuario = '$usuario',
					nome = '$nome',
					cpf = '$cpf',
					email = '$email',
					senha = '$senha',
					endereco = '$endereco',
					bairro = '$bairro',
					cidade = '$cidade',
					telefoneFixo = '$telefoneFixo',
					telefoneCel = '$telefoneCel',
					cep = '$cep',
					where id = $id";
					

	mysqli_query($con, $query);

	header("Location:perfil.php");

?>
