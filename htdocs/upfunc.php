<?php 
// Pasta onde a foto vai ser salva
$_UP['pasta'] = 'img/funcionarios/';

// Tamanho máximo do foto (em Bytes)
$_UP['tamanho'] = 1024 * 1024 * 10; // 10Mb

  // Array com as extensões permitidas
$_UP['extensoes'] = array('jpg', 'png', 'jpeg');

// Renomeia a foto? (Se true, a foto será salvo como .png e um nome único)
$_UP['renomeia'] = true;

// Array com os tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O foto no upload é maior do que o limite de 10Mb';
$_UP['erros'][2] = 'O foto ultrapassa o limite de tamanho especifiado no HTML';
$_UP['erros'][3] = 'O upload do foto foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do foto';
// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
if ($_FILES['foto']['error'] != 0) {
  
  die("Não foi possível fazer o upload, erro:" . $_UP['erros'][$_FILES['arquivo']['error']]);
  exit; // Para a execução do script
}

// Faz a verificação da extensão do arquivo
$extensao = explode('.', $_FILES['foto']['name']);
$extensao = strtolower(end($extensao));
if (array_search($extensao, $_UP['extensoes']) === false) {
  echo 
      "<script>
        function myFunction() {
        alert('Por favor, envie arquivos com as seguintes extensões: png ou jpeg');
          }
        </script>";
  exit;
}

// Faz a verificação do tamanho do arquivo
else if ($_UP['tamanho'] < $_FILES['foto']['size']){
  echo "O arquivo enviado é muito grande, envie arquivos de até 10Mb.";
}
// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
else{

  // Primeiro verifica se deve trocar o nome do arquivo
  if($_UP['renomeia'] == true){

  //Renomeia com a id do Banco  
  include "banco.php";
  $query = "select * from funcionarios order by codigo desc limit 1";
  $consulta = mysqli_query($con, $query);
  if($p = mysqli_fetch_array($consulta)){
    $id = $p['codigo'];
  }
    $nome_final = "$id.$extensao";
    mysqli_query($con, "update funcionarios set foto = '$nome_final' where codigo = $id");
  }else{
    // Mantém o nome original do arquivo
    $nome_final = $_FILES['foto']['name'];
  }
  //Verificar se é possível mover o arquivo para a pasta escolhida
  if (move_uploaded_file($_FILES['foto']['tmp_name'], $_UP['pasta'] . $nome_final)) {
  // Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
    
} else {
  // Não foi possível fazer o upload, provavelmente a pasta está incorreta
  echo  "Não foi possivel cadastrar o funcionário! Tente novamente";
  header('location: novofunc.php');
  } 
  
}

 ?>
