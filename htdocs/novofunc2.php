<?php 
	$nome = strip_tags($_POST['nome']);
	$email = strip_tags($_POST['email']);
	$rg = strip_tags($_POST['rg']);
	$cpf = strip_tags($_POST['cpf']);

	$pis = strip_tags($_POST['pis']);
	$estadocivil = strip_tags($_POST['estadocivil']);
	$nascimento = strip_tags($_POST['nascimento']);
	$usuario = strip_tags($_POST['usuario']);

	$senha = md5(strip_tags($_POST['senha']));
	$cep = strip_tags($_POST['cep']);
	$cidade = strip_tags($_POST['cidade']);
	$estado = strip_tags($_POST['estado']);
	$bairro = strip_tags($_POST['bairro']);
	$endereco = strip_tags($_POST['endereco']);
	$numero = strip_tags($_POST['numero']);
	$celular1 = strip_tags($_POST['celular1']);
	$celular2 = strip_tags($_POST['celular2']);
	$telfixo = strip_tags($_POST['telfixo']);
	$salario = strip_tags($_POST['salario']);
	$setor = strip_tags($_POST['setor']);
	$datacont = strip_tags($_POST['datacont']);
	$cargahoraria = strip_tags($_POST['cargahoraria']);
	$agencia = strip_tags($_POST['agencia']);
	$tipoconta = strip_tags($_POST['tipoconta']);
	$numconta = strip_tags($_POST['numconta']);


	include "banco.php";

	$q = mysqli_query($con,
	"insert funcionarios(
			nome, 
			email,
			rg, 
			cpf, 
			pis, 
			estadocivil, 
			nascimento, 
			usuario, 
			senha, 
			cep, 
			cidade, 
			estado,
			bairro,
			endereco,
			numero,
			celular1,
			celular2,
			telfixo,
			salario,
			setor,
			datacont,
			cargahoraria,
			agencia,
			tipoconta,
			numconta) 

	values( '$nome',
			'$email',
			'$rg',
			'$cpf',
			'$pis',
			'$estadocivil',
			'$nascimento',
			'$usuario',
			'$senha',
			'$cep',
			'$cidade',
			'$estado',
			'$bairro',
			'$endereco',
			'$numero',
			'$celular1',
			'$celular2',
			'$telfixo',
			'$salario',
			'$setor',
			'$datacont',
			'$cargahoraria',
			'$agencia',
			'$tipoconta',
			'$numconta')");
			include "upfunc.php";

			echo "<h1>$usuario</h1><p>É o mais novo integrante da ACCIO.</p>";
			header('Refresh: 3, funcionarios.php');
        
?>