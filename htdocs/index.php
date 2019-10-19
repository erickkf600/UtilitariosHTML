<?php
  include "login.php";
session_start();
include "banco.php";
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
$query = "select * from login limit 1";
?>
    <!doctype html>
    <html lang="pt-br">

    <head>
        <link rel="icon" type="icone.png" sizes="50x50" href="icon.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
        <meta http-eqiv="X-UA-Compatible" content="IE=edge" />

        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/vitrine/docs.theme.min.css">
        <link rel="stylesheet" href="css/vitrine/owl.carousel.min.css">
        <link rel="stylesheet" href="css/vitrine/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/logos/docs.theme.min.css">
        <link rel="stylesheet" href="css/logos/owl.carousel.min.css">
        <link href="https://fonts.googleapis.com/css?family=Changa|Asap|Orbitron|IBM+Plex+Mono" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        
        <script src="js/jquery.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <title>ACCIO</title>
    </head>

    <body style="background-color: #efefef;">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="rocket.png"></button>
        <nav class="navbar navbar-expand-lg navbar-danger bg-warning">
            <a href="index.php">
         <img class="navbar-brand" src="css/LOGO.png" alt="logo"></a>
         <?php 
         if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
            $car = "data-toggle='modal' data-target='#myModal' href='#'";
        }else{
            $car = "href='carrinho.php'";
        }

          ?>

            <a <?php echo  $car; ?> class="navbar-toggler"><i class="fas fa-shopping-cart fa-lg" style="color: #000;"></i></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span><i class="fas fa-bars"></i></span>
         </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                    </li>
                </ul>
                <div>
                    <form class="search" method="get" action="pesquisa2.php">
                        <input type="search" name="p" placeholder="Pesquisar">
                    </form>
                </div>
                <span id="login" class="navbar-text ml-5" style="font-size:1.2em;">
                <?php 
                if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
                 ?>  
               <div class="dropdown">
                <i class="fas fa-user-circle fa-2x" data-toggle="dropdown"></i>
                <div class="dropdown-menu" style="padding: 10px 11px;"> 
                  <a class="dropdown-item btn-dark" id="drop" data-toggle="modal" data-target="#myModal" href="#">LOGIN</a>
                  <a class="dropdown-item btn-dark" id="drop" href="cadastro.php">CADASTRE-SE</a>
                  <?php 
                     }else{
                        if(isset($_SESSION['email'])){
                           $email = $_SESSION['email'];
                        }else{
                           $email = $_COOKIE['email'];
                        }
                        if($email == 'adm@adm.com'){
                            
                   ?>

                     <div class="dropdown">
               <a href="admin.php" class="text-dark"><img src="adm.png" align="admpicture"></a>
               <div class="dropdown-menu" style="margin-left: -20%;">
                  <a class="dropdown-item btn-dark text-center" id="drop" href="admin.php">ESCRITÓRIO</a>
                  <a class="dropdown-item btn-dark text-center" id="drop" href="funcionarios.php">LISTA DE FUNCIONÁRIOS</a>
                  <a class="dropdown-item btn-dark text-center" id="drop" href="novofunc.php">NOVO FUNCIONÁRIO</a>
                  <a class="dropdown-item btn-dark text-center" id="drop" href="vendas.php">VENDAS</a>
                  <a class="dropdown-item btn-dark text-center" id="drop" href="destroys.php">SAIR</a>
                  <?php 
                    }else{
                     
                     ?>
                   <?php 
                      
                     $consulta = mysqli_query($con, $query);
                     while($f = mysqli_fetch_assoc($consulta)){
                    ?>
                  <div class="dropdown">
                     <b style="font-family: 'Changa', sans-serif; cursor: pointer;"><?php echo $email ?> <i class='fas fa-sort-down'></i></b>
                     <div class="dropdown-menu" style="margin-left: 15%;">
                        <a class="dropdown-item btn-dark text-center" id="drop" href="perfil.php?id=<?php  echo $f['id']; ?>">MINHA CONTA</a>
                        <a class="dropdown-item btn-dark text-center" id="drop" href="pedidos.php">MEUS PEDIDOS</a>
                        <a class="dropdown-item btn-dark text-center" id="drop" href="problemas.php">INFORMAR UM PROBLEMA</a>
                        <a class="dropdown-item btn-dark text-center" id="drop" href="config.php">CONFIGURAÇÕES</a>
                        <a class="dropdown-item btn-dark text-center" id="drop" href="destroys.php">SAIR</a>
                        <?php 
                           }}}
                           
                            ?>
                     </div>
                  </div>
         </span> 

                <!-- Menu em Mobile -->
                <div class="user">  
               <a  <?php echo  $car; ?>><i class="fas fa-shopping-cart" style="color: #000;"></i></a>
            </div>
            </li>

               <?php              
                if (empty($_SESSION['email']) and empty($_COOKIE['email'])){ 
               ?>
               <li id="respons" class="nav-item">
                  <a class="btn btn-dark btn-block"  data-toggle="modal" data-target="#myModal" href="#">LOGIN</a>
                </li>
               <li id="respons" class="nav-item">
                  <a class="btn btn-dark btn-block" href="cadastro.php">CADASTRE-SE</a>
               </li>
            <?php 
            }else{
               if(isset($_SESSION['email'])){
                           $email = $_SESSION['email'];
                        }else{
                           $email = $_COOKIE['email'];
                        }
                        if($email == 'adm@adm.com'){
             ?>
               <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="admin.php">ESCRITORIO</a>
             </li>
             <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="funcionarios.php">LISTA DE FUNCIONÁRIOS</a>
             </li>

             <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="novofunc.php">NOVO FUNCIONÁRIO</a>
             </li>

            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="destroys.php">SAIR</a>
            </li>

            <?php 
               }else{
             ?>

            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="perfil.php">MINHA CONTA</a>
             </li>

            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="pedidos.php">MEUS PEDIDOS</a>
            </li>

            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="problemas.php">INFORMAR UM PROBLEMA</a>
            </li>

            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="config.php">CONFIGURAÇÕES</a>
            </li>

            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="destroys.php">SAIR</a>
            </li>

            <?php 
            }}
             ?>
            <div class="pesq">
               <form method="get" action="pesquisa2.php">
                  <input type="search" name="p" placeholder="Pesquisar">
               </form>
            </div>
         </div>
      </nav>
        <nav id="sticky" class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-md-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown text-light" href="#" id="navbardrop" data-toggle="dropdown">INFORMÁTICA</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item btn-dark"  id="down" href="categorias/informatica/hardwere.php">Hardwere</a>
                            <a class="dropdown-item btn-dark"  id="down" href="categorias/informatica/perifericos.php">Perifericos</a>
                            <a class="dropdown-item btn-dark"  id="down" href="categorias/informatica/computadores.php">Computadores</a>
                            <a class="dropdown-item btn-dark"  id="down" href="categorias/informatica/notebooks.php">Notebooks</a>
                            <a class="dropdown-item btn-dark"  id="down" href="categorias/informatica/acessorios.php">Acessórios</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown text-light" href="#" id="navbardrop" data-toggle="dropdown">ELETRÔNICOS</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item btn-dark" id="down" href="categorias/eletronicos/smartphones.php">Smartphones</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/eletronicos/smatwatches.php">Smartwatches</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/eletronicos/drones.php">Drones</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/eletronicos/componetes.php">Componentes</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown text-light" href="#" id="navbardrop" data-toggle="dropdown">GAMES</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item btn-dark" id="down" href="categorias/games/consoles.php">Consoles</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/games/jogos.php">Jogos</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/games/acessorios.php">Acessórios</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown text-light" href="#" id="navbardrop" data-toggle="dropdown">LEITURA</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item btn-dark" id="down" href="categorias/leitura/hqs.php">HQs</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/leitura/mangas.php">Mangás</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/leitura/livros.php">Livros</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/leitura/ebooks.php">E-books</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown text-light" href="#" id="navbardrop" data-toggle="dropdown">VESTÚARIO</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item btn-dark" id="down" href="categorias/vestuario/masculino.php">Masculino</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/vestuario/feminino.php">Feminino</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/vestuario/calcados.php">Calçados</a>
                            <a class="dropdown-item btn-dark" id="down" href="categorias/vestuario/acessorios.php">Acessórios</a>
                        </div>
                    </li>
            </ul>
        </nav>
        <div class="menu">
            <div>
                <button class="btn btn-dark btn-lg btn-block font-weight-bold" type="button" data-toggle="modal" data-target="#catagorias">CATEGORIAS</button>
                <div class="modal fade" id="catagorias">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <button class="btn btn-warning btn-lg btn-block mb-3" data-toggle="collapse" data-target="#demo">INFORMÁTICA<span class="float-right text-light"><i class="fas fa-angle-down fa-lg"></i></span></button>
                                <div id="demo" class="collapse">
                                    <a class="btn btn-dark btn-block" href="categorias/informatica/hardwere.php">Hardwere</a>
                                    <a class="btn btn-dark btn-block" href="categorias/informatica/perifericos.php">Perifericos</a>
                                    <a class="btn btn-dark btn-block" href="categorias/informatica/computadores-info.php">Computadores</a>
                                    <a class="btn btn-dark btn-block" href="categorias/informatica/notebooks.php">Notebooks</a>
                                    <a class="btn btn-dark btn-block" href="categorias/informatica/acessorios.php">Acessórios</a>
                                </div>

                                <button class="btn btn-warning btn-lg btn-block mb-3" data-toggle="collapse" data-target="#demo1">ELETRÔNICOS<span class="float-right text-light"><i class="fas fa-angle-down fa-lg"></i></span></button>
                                <div id="demo1" class="collapse">
                                    <a class="btn btn-dark btn-block" href="categorias/eletronicos/smartphones.php">Smartphones</a>
                                    <a class="btn btn-dark btn-block" href="categorias/eletronicos/smatwatches.php">Smartwatches</a>
                                    <a class="btn btn-dark btn-block" href="categorias/eletronicos/drones.php">Drones</a>
                                    <a class="btn btn-dark btn-block" href="categorias/eletronicos/componetes.php">Componentes</a>
                                </div>

                                <button class="btn btn-warning btn-lg btn-block mb-3" data-toggle="collapse" data-target="#demo2">GAMES<span class="float-right text-light"><i class="fas fa-angle-down fa-lg"></i></span></button>
                                <div id="demo2" class="collapse">
                                    <a class="btn btn-dark btn-block" href="categorias/games/consoles.php">Consoles</a>
                                    <a class="btn btn-dark btn-block" href="categorias/games/jogos.php">Jogos</a>
                                    <a class="btn btn-dark btn-block" href="categorias/games/acessorios.php">Acessórios</a>
                                </div>

                                <button class="btn btn-warning btn-lg btn-block mb-3" data-toggle="collapse" data-target="#demo3">LEITURA<span class="float-right text-light"><i class="fas fa-angle-down fa-lg"></i></span></button>
                                <div id="demo3" class="collapse">
                                    <a class="btn btn-dark btn-block" href="categorias/leitura/hqs.php">HQs</a>
                                    <a class="btn btn-dark btn-block" href="categorias/leitura/mangas.php">Mangás</a>
                                    <a class="btn btn-dark btn-block" href="categorias/leitura/livros.php">Livros</a>
                                    <a class="btn btn-dark btn-block" href="categorias/leitura/ebooks.php">E-books</a>
                                </div>

                                <button class="btn btn-warning btn-lg btn-block mb-3" data-toggle="collapse" data-target="#demo1">VESTÚARIO<span class="float-right text-light"><i class="fas fa-angle-down fa-lg"></i></span></button>
                                <div id="demo1" class="collapse">
                                    <a class="btn btn-dark btn-block" href="categorias/vestuario/masculino.php">Masculino</a>
                                    <a class="btn btn-dark btn-block" href="categorias/vestuario/feminino.php">Feminino</a>
                                    <a class="btn btn-dark btn-block" href="categorias/vestuario/calcados.php">Calçados</a>
                                    <a class="btn btn-dark btn-block" href="categorias/vestuario/acessorios.php">Acessórios</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
         include "conteudo.php"
         ?>
            <hr>
            </div>
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
    </body>

    </html>