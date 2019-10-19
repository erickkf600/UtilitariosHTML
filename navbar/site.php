<?php
include "login.php"
?>   
<link rel="stylesheet" href="css/layout.css">
    <nav class="navbar navbar-expand-lg navbar-danger bg-warning">
  <a href="index.php">
      <img class="navbar-brand" src="css/logo.png" alt="logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        </li>
    </ul>
        <div class="search">
          <form>
            <input type="text" name="search" placeholder="Pesquisar">
          </form>
        </div>

        <div class="user">
          <div class="dropdown">
            <i class="fas fa-user-circle" data-toggle="dropdown"></i>
            <div class="dropdown-menu" style="margin-left: -90%;">
              <a class="dropdown-item btn btn-dark" style="text-align: center" data-toggle="modal" data-target="#myModal" href="#">Login</a>
              <p style="text-align: center; margin-top: 10%;">OU</p>
              <a class="dropdown-item btn btn-dark" href="cadastro.php" style="text-align: center">Cadastre-se</a>
            </div>
            <a  href="carrinho.php"><i class="fas fa-shopping-cart" style="color: #000;"></i></a>
          </div>
        </div>          

  <li class="nav-item">
      <a class="btn outline btn-block" data-toggle="modal" data-target="#myModal" href="">Login</a>
  </li>

   <li class="nav-item">
      <a class="btn outline btn-block" href="cadastro.php">Cadastrar-se</a>
  </li>


  <div class="pesq">
    <form>
      <input type="text" name="search" placeholder="Pesquisar">
    </form>
  </div>        
 </div>
</nav>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="#">Logo</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
  </ul>
</nav>



