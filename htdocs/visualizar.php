<?php
  include "login.php";
session_start();
 if(isset($_POST['p'])){
    $pesquisa = 1;
    $p = $_POST['p'];
  }else{
    $pesquisa = 0;
  }

?>
<!doctype html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <link rel="stylesheet" href="css/layout.css">
      <link rel="stylesheet" href="css/slider.css">
      <link rel="stylesheet" href="css/vitrine/docs.theme.min.css">
      <link rel="stylesheet" href="css/vitrine/owl.carousel.min.css">
      <link rel="stylesheet" href="css/vitrine/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/logo/docs.theme.min.css">
      <link rel="stylesheet" href="css/logos/owl.carousel.min.css">
      <link rel="stylesheet" href="css/logos/owl.theme.default.min.css">
      <link rel="shortcut icon" href="icone/nasa.png" type="image/x-icon" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="js/jquery.min.js"></script>
      <script src="js/owl.carousel.js"></script> 
      <title>ACCIO</title>
   </head>
   <body style="background-color: #efefef;">
      <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="rocket.png"></button>

        <a href="index.php"><header class="btn btn-warning" style="width: 100%;">
      
      <img class="logo" src="css/logo.png" alt="logo"> 
      </header></a>
      <div id="main" class="container mt-5">
          <h2 class="page-header text-danger">Produto</h2>
       </div> 
    <div class="table-responsive col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Fabricante</th>
                    <th>Preço</th>
                    <th class="actions">Ações</th>
                 </tr>
    <?php 
      include "banco.php";
      // Se a página não veio de uma consulta, ele vai selecionar todos os funcionários como na linha 43. 
      if($pesquisa == 0){
        $query = "select * from produto";
      }else{
        // caso venha de uma consulta, utilizamos o comando like, para pegar nome/cargo ou parte do nome/cargo(sempre se acordo com a consulta)
        $query = "select * from produto where nome like '%$p%' 
                  or cargo like '%$p%'";
      }
      $consulta = mysqli_query($con, $query);
      
      // as próximas linhas, servem para exibir uma mensagem de erro, caso a pesquisa não tenha nenhum retorno!
      $total = mysqli_num_rows($consulta);
      if($total == 0){
        echo "Nenhum usuário encontrado!";
      }
      while($f = mysqli_fetch_array($consulta)){
      // os comandos abaixo, serve para pegar as informações que estão no banco de dados e colocá-los em uma variável
          $id          = $p['id'];
          $idc         = base64_encode($id);
          $nomeprod    = $p['nomeprod'];
          $categoria   = $p['categoria'];
          $quantidade  = $p['quantidade'];
          $fabricante  = $p['fabricante'];
          $preco       = $p['preco'];
          $preco       = number_format($preco, 2, ',','.');
          echo "<tr>
                 <td>$id</td>
                 <td>$nomeprod</td>
                 <td>$categoria</td>
                 <td>$quantidade</td>
                 <td>$fabricante</td>
                 <td>R$ $preco</td>
                 <td class='actions'>
                 <a class='btn btn-success btn-sm' href ='visualizar.php?id=$id'>Visualizar</a>
                 <a class='btn btn-success btn-sm' href ='edit-item.php?id=$id'>Editar</a>
                 <a class='btn btn-success btn-sm' href ='excluir.php?id=$id'>Excluir</a>
                 </td>
                </tr>";
    }
    
  ?>
  </thead>
           </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->

   <footer>
      <?php
         include "footer.inc";
         ?>
   </footer>
         <script type="text/javascript" src="js/index.js"></script>
         <script type="text/javascript" src="js/logos.js"></script>
         <script type="text/javascript" src="js/vitrine.js"></script>

         <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

         <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
</script>
   </body>
</html>
