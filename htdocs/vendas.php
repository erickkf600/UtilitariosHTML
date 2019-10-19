<?php
  include "login.php";
session_start();
  if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
   header("Location:index.php"); 
 }else{
    if(isset($_SESSION['email'])){
      $email = $_SESSION['email'];
    }
    if(isset($_COOKIE['email'])){
      $email = $_COOKIE['email'];
    }
    if($email != 'adm@adm.com'){
      header("Location:index.php"); 
    }
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

        <a href="index.php">
          <header class="btn btn-warning" style="width: 100%;">
            <img class="logo" src="css/LOGO.png" alt="logo">
          </header>      
        </a>

        <div id="myTab" class="nav-pills nav justify-content-start scrollmenu">

        <a href="admin.php" class="tablink" id="ad"><i class="fas fa-briefcase fa-lg"></i> ESCRITÓRIO</a>
        <a href="funcionarios.php" class="tablink" id="ad"><i class="fas fa-users fa-lg"></i> LISTA DE FUNCIONÁRIOS</a>
        <a href="novofunc.php" class="tablink" id="ad"><i class="fas fa-user-plus fa-lg"></i> NOVO FUNCIONÁRIO</a>
        <a href="vendas.php" class="tablink" id="ad"><i class="fas fa-chart-line fa-lg"></i> VENDAS</a>
        <a href="destroys.php" class="tablink" id="ad"><i class="fas fa-sign-out-alt fa-lg"></i> SAIR</a>

    </div>

    <!-- menu mobile -->

    <div id="myTab2" class="nav-pills nav justify-content-center scrollmenu">

        <a href="admin.php" class="tablink" id="ad"><i class="fas fa-briefcase fa-lg"></i></a>
        <a href="funcionarios.php" class="tablink" id="ad"><i class="fas fa-users fa-lg"></i></a>
        <a href="novofunc.php" class="tablink" id="ad"><i class="fas fa-user-plus fa-lg"></i></a>
        <a href="vendas.php" class="tablink" id="ad"><i class="fas fa-chart-line fa-lg"></i></a>
        <a href="destroys.php" class="tablink" id="ad"><i class="fas fa-sign-out-alt fa-lg"></i></a>

    </div>

    
     <div id="main" class="container-fluid mt-5">
          

        <main role="main" class="col-md-4 ml-sm-4 col-lg-11 pt-3">
          <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center">
            <h2 class="text-danger" id="head">DASHBOARD</h2>

            <div class="col-md-6 " id="head">
              <div class="input-group h2">
                <input class="form-control" id="myInput" type="text" placeholder="Pesquisar Venda">
              </div>    
            </div> 
            <div class="btn-toolbar mb-2 mb-md-0" id="head">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-dark" onclick="myFunction()"><i class="fas fa-print"></i> Imprimir</button>
              </div>
              <button class="btn btn-sm btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="datepicker">
                <i class="far fa-calendar-alt"></i> DATA</button> 
                <div class="dropdown-menu">
              <form>    
                <input class="dropdown-item" type="date"></input>
                <button type="submit" class="btn-dark btn-sm btn-block">Buscar</button>
              </form>   
             </div>
             <div class="btn-group ml-4" role="group" aria-label="Basic example">
                <a href="" type="button" onclick="drive()" class="btn btn-dark text-light"><i class="fab fa-google-drive fa-lg"></i></a>
                <a href="" type="button" onclick="email()" class="btn btn-dark text-light"><i class="fas fa-envelope fa-lg"></i></a>
                <a href="" type="button" onclick="dropBox()" class="btn btn-dark text-light"><i class="fab fa-dropbox fa-lg"></i></a>
              </div>   
            </div>
          </div>
         


          <canvas class="grafico my-1 mt-5" id="myChart" width="600" height="200"></canvas>

          <h2 class="mt-4 mb-3 text-center">VENDAS</h2>
          <div class="table-responsive" id="table">
            <table class="table table-striped table-sm">
              <thead id="thead">
                <tr>
                  <th>#Cod. do Porduto</th>
                  <th>Produto</th>
                  <th>Data da Venda</th>
                  <th>Hora da Venda</th>
                  <th>NFe</th>
                  <th>Forma de Pg.</th>
                  <th>Valor</th>
                  <th>Liquidez</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#00000000</td>
                  <td>Gabinete NZXT Phantom 530</td>
                  <td>00/00/000</td>
                  <td>00:00</td>
                  <td>#00015365441285215</td>
                  <td>Boleto</td>
                  <td>R$ 750,00</td>
                  <td>R$ 300,00</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                  <td>elit</td>
                  <td>elit</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                  <td>Praesent</td>
                  <td>Praesent</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                  <td>ante</td>
                  <td>ante</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                  <td>nisi</td>
                  <td>nisi</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                  <td>at</td>
                  <td>at</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                  <td>Duis</td>
                  <td>Duis</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                  <td>mauris</td>
                  <td>mauris</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                  <td>sed</td>
                  <td>sed</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                  <td>Mauris</td>
                  <td>Mauris</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                  <td>arcu</td>
                  <td>arcu</td>
                  <td>arcu</td>
                </tr>
              </tbody>
            </table>
              <div aria-label="Page navigation example" id="page">
                <ul class="pagination justify-content-end pagination-sm">
                  <li class="page-item disabled">
                   <a class="page-link" href="#" tabindex="-1">Voltar</a></li>                 
                    <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link text-dark" href="#">Proximo</a>
                    </li>
                  </ul>
              </div>
          </div>
        </main>
      </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<footer class="pt-5" style="background: #d6d6d6;border-top: 1px solid #DDDDDD;"></footer>

    <!-- Grafico -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script type="text/javascript" src="js/vendas.js"></script>
         <script type="text/javascript" src="js/index.js"></script>
         <script type="text/javascript" src="js/logos.js"></script>
         <script type="text/javascript" src="js/vitrine.js"></script>

         <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
   </body>
</html>
