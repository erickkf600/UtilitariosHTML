<?php
$nvsenha = md5($_POST['senha']);

include "banco.php";

mysqli_query($con, "update login set senha = '$nvsenha' where senha = '$nvsenha'");

echo "senha alterada com sucesso";

?>