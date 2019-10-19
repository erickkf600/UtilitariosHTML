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

include "modalinfo.php";
include "edit-item.php";
include "banco.php";
               /*************PAGINAÇÃO********************/
//Verificar se está sendo passado na URL a página atual, senao é atribuido a pagina 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os itens da tabela
$resultado = "select * from produto";
$iten = mysqli_query($con, $resultado);

//Contar o total de itens
$total = mysqli_num_rows($iten);

//Seta a quantidade de itens por pagina
$quantidade_pg = 6;

//calcular o número de pagina necessárias para apresentar todos os itens
$num_pagina = ceil($total/$quantidade_pg);

//Calcular o inicio da visualizacao
$incio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os cursos a serem apresentado na página
$resultado = "select * from produto limit $incio, $quantidade_pg";
$iten = mysqli_query($con, $resultado);
$total = mysqli_num_rows($iten);

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
        <div id="main" class="container mt-5">
            <h2 class="page-header text-danger">ESCRITÓRIO</h2>

            <div class="container">
                <div id="top" class="row mt-5">
                    <div class="col-md-3">
                        <h3>Itens</h3>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group h2">
                            <form method="get" class="input-group h2" action="pesquisa.php">
                                <input class="form-control" id="myInput" name="p" type="text" placeholder="Pesquisar">
                            </form>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <a href="add-item.php" class="btn btn-dark pull-right ml-5">Novo Item</a>
                    </div>
                </div>

            </div>
        </div>

        <form method="get">
            <div class="input-group-prepend col-md-2">
                <label class="input-group-text" for="inputGroupSelect01">Itens por página</label>
                <select class="custom-select" name="select" id="inputGroupSelect01">
                    <?php $quantidade_pg = $_GET['exibir']; ?>
                        <option selected></option>
                        <option value="1" selected>6</option>
                        <option value="2" <?php if($quantidade_pg==12){ echo "selected";} ?>>12</option>
                        <option value="3" <?php if($quantidade_pg==24){ echo "selected";} ?>>24</option>
                        <option value="3" <?php if($quantidade_pg==48){ echo "selected";} ?>>48</option>
                </select>
            </div>
        </form>

        <hr>

        <div class="container-fluid col-md-10">

            <table class="table table-striped" id="func">
                <thead>
                    <tr>
                        <th style="width:8%">Codigo</th>
                        <th style="width:28%">Titulo</th>
                        <th style="width:12%">Preço</th>
                        <th style="width:15%">Categoria</th>
                        <th style="width:15%">Sub-Categoria</th>
                        <th style="width:9%">Estoque</th>
                        <th style="width:13%">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($f = mysqli_fetch_array($iten)){ ?>
                        <tr id="hover0">
                            <td data-th="Codigo" class="low"></td>
                            <td width="100">
                                <?php echo $f['codigo']; ?>
                            </td>
                            <td data-th="Titulo" class="low text-dark"></td>
                            <td>
                                <?php echo $f['titulo']; ?>
                            </td>
                            <td data-th="Preço" class="low"></td>
                            <td>
                                <?php echo $f['preco']; ?>
                            </td>
                            <td data-th="Categoria" class="low"></td>
                            <td>
                                <?php echo $f['categoria']; ?>
                            </td>
                            <td data-th="Sub-Categoria" class="low"></td>
                            <td width="100">
                                <?php echo $f['subcategoria']; ?>
                            </td>
                            <td data-th="Em estoque" class="low"></td>
                            <td width="100">
                                <?php echo $f['estoque']; ?>
                            </td>
                            <td data-th="Ação" class="low"></td>
                            <td width="100">
                                <div class="btn-group">
                                    <a href="produto.php?id=<?php echo $f['idprod'] ?>" type="button" class="btn btn-success">Visualizar</a>
                                    <a href="" data-toggle="modal" data-target="#edit<?php echo $f['codigo']; ?>" type="button" class="btn btn-warning">Editar</a>
                                    <a href="" type="button" class="btn btn-danger">Excluir</a>
                                </div>
                            </td>
                            <?php } ?>
                        </tr>
                </tbody>
            </table>
            <div aria-label="Page navigation example" id="page">
                <ul class="pagination justify-content-end pagination-sm mr-3">
                    <!-- números da pagina -->
                    <?php //Verificar a pagina anterior e posterior
                        $pagina_anterior = $pagina - 1;
                        $pagina_posterior = $pagina + 1; 
                      ?>

                        <!-- Voltar -->
                        <li class="page-item">
                            <?php if($pagina_anterior != 0){ ?>
                                <a href="admin.php?pagina=<?php echo $pagina_anterior; ?>" class="page-link text-dark">Voltar</a>
                                <?php }else{ ?>
                                    <span class="page-link text-muted">Voltar</span>
                                    <?php } ?>
                        </li>

                        <!-- Numero de paginas -->
                        <?php for($i = 1; $i < $num_pagina + 1; $i++){ ?>
                            <li class="page-item">
                                <a class="page-link text-dark" href="admin.php?pagina=<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                            <?php } ?>

                                <!-- proximo -->
                                <li class="page-item">
                                    <?php if($pagina_posterior <= $num_pagina){ ?>
                                        <a class="page-link text-dark" href="admin.php?pagina=<?php echo $pagina_posterior; ?>">Proximo</a>
                                        <?php }else{ ?>
                                            <a class="page-link text-muted">Proximo</a>
                                            <?php } ?>
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