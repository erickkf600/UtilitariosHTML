<?php
date_default_timezone_set('America/Sao_Paulo');
	$data = $_POST['data'];
	$valor = $_POST['valor'];
	$parcelas = $_POST['parcelas'];
	
	$data = date("d/m/y");
	$total = ($valor/$parcelas);

	
	echo "Valor Avista: $valor<br>";
	echo "numero de parcelas: $par<br>";
	echo "Vencimento da parcela: $data valor a ser pago $total<br>";
	

	echo "parcela: $par "
?>