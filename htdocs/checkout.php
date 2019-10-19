<?php 
include "header.php";
include "modal-user-info.php";
include "banco.php";
$query = "select * from login where email = '$email'";

$c = mysqli_query($con, $query);
?>
<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<div class="container-fluid">
   <div class="row col-md-12">
      <div class="col-lg-5">
         <div class="card" style="margin:50px 0;">
            <!-- Default panel contents -->
            <div class="card-header">Informações de Pagamento</div>
            <form style="padding: 20px;">
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputState"><b>Forma de Pagamento</b></label>
                     <select id="inputState" class="form-control">
                        <option disabled selected>Selecione</option>
                        <option disabled >Crédito</option>
                        <option value="visa">Visa</option>
                        <option value="master">Master Card</option>
                        <option disabled >Débito</option>
                        <option value="master">ELO</option>
                        <option value="master">Visa Electron</option>
                        <option value="master">Maestro</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                 <label for="inputPassword4"><b>Digite o Número do Cartão</b></label>
                 <input type="number" min="0">
             </div>
         </div>
         <div class="form-row">
            <div class="form-group col-md-4">
             <label for="inputState"><b>Data de Validade</b></label>
             <select id="inputState" class="form-control" name="mes">
                <option disabled selected>Mês</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
        <div class="form-group col-md-4">
         <label for="inputState"><b>Data de Validade</b></label>
         <select id="inputState" class="form-control" name="ano">
            <option disabled selected>Ano</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
        </select>
    </div>
    <div class="form-group col-md-4">
     <label for="inputPassword4"><b>Codigo CVV</b></label>
     <input type="number" min="0" name="cvv">
 </div>
</div>
<?php

include "banco.php";

  $query = "select * from login";     
  
  $consulta = mysqli_query($con, $query);
  
  $total = mysqli_num_rows($consulta);
  
  while($l = mysqli_fetch_array($consulta)){

    $nome =     $l['nome'];
    $cpf =      $l['cpf'];
    $dataNasc = $l['dataNasc'];
  }
?>
<div class="form-group">
  <label for="inputAddress2">CPF do Títular</label>
  <input type="numnber" min="0" class="form-control" value="<?php echo "$cpf" ?>">
</div>
<div class="form-row">
  <div class="form-group col-md-6">
     <label for="inputCity">Nome</label>
     <input type="text" maxlength="30" class="form-control" value="<?php echo "$nome" ?>">
 </div>
 <div class="form-group col-md-4">
     <label for="inputDate">Data de Nascimento</label>
     <input type="date" value="<?php echo "$dataNasc" ?>">
</div>

<div class="form-group col-md-2">
 <label for="inputZip">Zip</label>
 <input type="text" class="form-control" id="inputZip">
</div>
</div>
<?php while($f = mysqli_fetch_array($c)){ ?>
<button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#pessoais<?php echo $f['id']; ?>" >VERIFICAR DADOS PARA ENVIO</button>
<?php } ?>
</form>
</div>
</div>
<div class="col-sm-7">
 <div class="card" style="margin:50px 0">
    <!-- Default panel contents -->
    <div class="card-header">Itens</div>
    <table class="table table-striped" style="padding: 10px;">
       <thead>
          <tr>
             <th style="width: 80%;">Porduto</th>
             <th style="width: 10%;">Qtd</th>
             <th style="width: 10%;">Subtotal</th>
         </tr>
     </thead>
     <tbody>
      <tr>
      <?php
      $vt = 0;
     
      $email = $_SESSION['email'];
      $query = "select p.img, p.titulo, p.preco, c.qtd, c.idcarrinho, p.idprod from carrinho c, produto p where c.usuario = '$email' and c.idprod = p.idprod";
      $c = mysqli_query($con, $query);
      $total = mysqli_num_rows($c);
      
          while($f = mysqli_fetch_array($c)){
            $img = $f[0];
            $titulo = $f[1];
            $preco = $f[2];
            $qtd = $f[3];
            
        //$preco = number_format($preco, 2, ',','.');
            $st = $preco * $qtd;
         //$st = number_format($st, 2, ',','.');
            $vt = $vt + $st;
          }
    ?>
         
        <td>
         <img src="img/produtos/<?php echo $img; ?>" width="100">   
         <span><?php echo $f['titulo']; ?></span>
     </td>
     <td><?php echo $qtd ?></td>
     <td class="font-weight-bold">R$: <?php echo $preco ?></td>
 </tr>
</tbody>
</table>
<div class="card-footer">Frete Estimado: <span class="float-right font-weight-bold">R$ 25,00</span></div>
</div>
<h1 class="text-danger">Total: R$ <?php echo $vt + 25 ?></h1>
</div>
</div>
<div class="text-center">
  <input type="submit" value="FINALIZAR PEDIDO" class="inputButton2">
</div>
<footer class="mt-3">
  <?php include "footer.inc"; ?>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

