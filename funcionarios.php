<?php
  include "login.php";
  include "modalinfo.php";
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
          <div class="container">
           <div id="top" class="row mt-5">
            <div class="col-md-3">
              <h3>Funciónarios</h3>
            </div>

            <div class="col-md-9">
              <div class="input-group h2">
                <input class="form-control" id="myInput" type="text" placeholder="Pesquisar">
              </div>    
            </div>  
           </div>
 
          </div> <!-- /#top -->
 </div>

     <hr>

<div class="well">
    <table class="table table-hover" id="func">
      <thead>
        <tr>
          <th>#</th>
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Usuário</th>
        </tr>
      </thead>
      <tbody>
        <tr data-toggle="modal" data-target="#info" style='cursor:pointer'>
          <td data-th="#" class="low text-dark">
          <td><img src="img/funcionarios/user.png" width="60" class="img-fluid" id="user"></td>
          <td data-th="ID" class="low">
          <td>1</td>
          <td data-th="Nome" class="low">
          <td>Tompson</td>
          <td data-th="Telefone" class="low">
          <td>(21) 201154587</td>
          <td data-th="Usuário" class="low">
          <td>
           the_mark7  
          </td>
        </tr>
        <tr>
          <td data-th="#" class="low text-dark">
          <td><img src="img/funcionarios/user.png" width="60" class="img-fluid" id="user"></td>
          <td data-th="ID" class="low">
          <td>1</td>
          <td data-th="Nome" class="low">
          <td>Tompson</td>
          <td data-th="Telefone" class="low">
          <td>(21) 201154587</td>
          <td data-th="Usuário" class="low">
          <td>
           the_mark7  
          </td>
        </tr>
        <tr>
          <td data-th="#" class="low text-dark">
          <td><img src="img/funcionarios/user.png" width="60" class="img-fluid" id="user"></td>
          <td data-th="ID" class="low">
          <td>1</td>
          <td data-th="Nome" class="low">
          <td>Tompson</td>
          <td data-th="Telefone" class="low">
          <td>(21) 201154587</td>
          <td data-th="Usuário" class="low">
          <td>
           the_mark7  
          </td>
       
          <tr>
          <td data-th="#" class="low text-dark">
          <td><img src="img/funcionarios/user.png" width="60" class="img-fluid" id="user"></td>
          <td data-th="ID" class="low">
          <td>1</td>
          <td data-th="Nome" class="low">
          <td>Tompson</td>
          <td data-th="Telefone" class="low">
          <td>(21) 201154587</td>
          <td data-th="Usuário" class="low">
          <td>
           the_mark7  
          </td>
        </tr>

          <tr>
          <td data-th="#" class="low text-dark">
          <td><img src="img/funcionarios/user.png" width="60" class="img-fluid" id="user"></td>
          <td data-th="ID" class="low">
          <td>1</td>
          <td data-th="Nome" class="low">
          <td>Tompson</td>
          <td data-th="Telefone" class="low">
          <td>(21) 201154587</td>
          <td data-th="Usuário" class="low">
          <td>
           the_mark7  
          </td>
        </tr>
      </tbody>
    </table>
<hr>

    <div aria-label="Page navigation example" id="page">
                <ul class="pagination justify-content-end pagination-sm mr-3">
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
<footer class="pt-5 mt-5" style="background: #d6d6d6; padding-bottom: 7%;"></footer>


    
     

         <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
   </body>
</html>
