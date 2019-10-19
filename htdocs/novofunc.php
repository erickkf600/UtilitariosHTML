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

    <body style="background-image:url(fundo2.jpg);">
        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="rocket.png"></button>
        <a href="funcionarios.php">
            <header class="btn btn-warning" style="width: 100%;">
                <img class="logo" src="css/LOGO.png" alt="logo">
            </header>
        </a>
        <div class="container mt-5" id="funcionario">

            <h2 class="mb-4">Cadastrar Funcionário</h2>
            <form method="post" action="novofunc2.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputAddress" id="label">Nome Completo</label>
                    <input type="text" name="nome" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="inputAddress" id="label">Email</label>
                    <input type="email" name="email" class="form-control" required="">
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <label for="inputAddress" id="label">RG</label>
                        <input type="number" name="rg" min="0" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" id="label">CPF</label>
                        <input type="number" min="0" name="cpf" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="inputAddress" id="label">PIS</label>
                        <input type="number" min="0" name="pis" class="form-control" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label id="label">Estado Civil</label>
                        <select name="estadocivil" class="form-control">
                            <option disabled selected>Selecione</option>
                            <option value="solteiro">Solteiro</option>
                            <option value="casado">Casado</option>
                            <option value="viuvo">Viúvo</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputAddress" id="label">Data de Nascimento</label>
                        <input name="nascimento" type="date" class="form-control" required>
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-md-6">
                        <label for="inputAddress" id="label">Usuário</label>
                        <input name="usuario" type="text" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputAddress" id="label">Senha</label>
                        <input name="senha" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="inputCity" id="label">CEP</label>
                        <input type="number" min='0' placeholder="CEP" name="cep" type="text" id="cep" value="" onblur="pesquisacep(this.value);">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip" id="label">Cidade</label>
                        <input name="cidade" type="text" class="form-control" id="cidade" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputZip" id="label">Estado</label>
                        <input name="estado" type="text" class="form-control" id="estado" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip" id="label">Bairro</label>
                        <input name="bairro" type="text" class="form-control" id="bairro" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="inputCity" id="label">Endereço</label>
                        <input name="endereco" type="text" class="form-control" id="endereco" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip" id="label">Número</label>
                        <input name="numero" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4">
                        <label for="inputAddress" id="label">Celular 1</label>
                        <input name="celular1" type="number" min="0" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" id="label">Celular 2</label>
                        <input name="celular2" type="number" min="0" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label for="inputAddress" id="label">Telefone fixo</label>
                        <input name="telfixo" type="number" min="0" class="form-control">
                    </div>
                </div>
                <div class="form-row mt-4">
                  <div class="col-md-3">
                      <label for="inputAddress" id="label">Setor</label>
                      <input name="setor" type="text" class="form-control" required>
                  </div>

                  <div class="col-md-3">
                    <label for="inputAddress" id="label">Salário</label>
                   <input name="salario" type="number" min="0" class="form-control" required>
                  </div>

                  <div class="col-md-3">
                    <label for="inputAddress" id="label">Data da Contratação</label>
                   <input name="datacont" type="date"  class="form-control" required>
                  </div>

                   <div class="col-md-3">
                    <label for="inputAddress" id="label">Carga Horaria Semanal</label>
                   <input name="cargahoraria" type="number"  class="form-control" required>
                  </div>

                </div>

                <div class="form-row mt-4">
                  <div class="form-group col-md-3">
                        <label id="label">Agência</label>
                        <select required name="agencia" class="form-control">
                            <option disabled selected>Selecione</option>
                            <option value="001-bco-brasil">001 - BANCO DO BRASIL</option>
                            <option value="237-bradesco">237 - BRADESCO</option>
                            <option value="104-caixa">104 - CAIXA ECONÔMICA FEDERAL</option>
                            <option value="033-santander">033 - SANTANDER</option>
                            <option value="184-itau">184 - ITAÚ</option>
                        </select>
                    </div>

                  <div class="form-group col-md-3">
                        <label id="label">Tipo de Conta</label>
                        <select required name="tipoconta" class="form-control">
                            <option disabled selected>Selecione</option>
                            <option value="pupanca">Pupança</option>
                            <option value="corrent">Corrente</option>
                        </select>
                    </div>

                   <div class="col-md-3">
                    <label for="inputAddress" id="label">Número da Conta</label>
                   <input name="numconta" type="number"  class="form-control" required>
                  </div>

                </div>


                <div class="col-md-4">
                    <label for="foto">Adicionar Foto</label>
                    <input type="file" name="foto" accept="image/jpeg, image/png, image/jpg" required />
                </div>

                <div class="text-center">
                    <input type="submit" value="Cadastrar Funciónario" class="inputButton">
                </div>
            </form>
        </div>

        <!-- modal de upload -->
        <script type="text/javascript" src="js/index.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <footer class="pt-5 mt-5" style="background: #d6d6d6;border-top: 1px solid #DDDDDD; padding-bottom: 4%;"></footer>

        <!-- Grafico -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script type="text/javascript" src="js/vendas.js"></script>
        <script type="text/javascript" src="js/logos.js"></script>
        <script type="text/javascript" src="js/vitrine.js"></script>

        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>