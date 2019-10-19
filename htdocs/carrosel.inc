
 <style>

  .carousel-inner img {
      width: 100%;
      height: 70%;
  }
  @media only screen and (max-width: 1024px){
    .carousel-inner img {
      width: 100%;
      height: 30%;
  }

  }
  </style>
</head>
<body>

<div id="carousel" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carrosel/banner.jpg" alt="banner">
    </div>

    <div class="carousel-item">
    <a href="categorias/informatica/acessorios">
      <img src="img/carrosel/pc.jpg" alt="PC gamer"></a>
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <a href="">
      <img src="img/carrosel/galaxy.jpg" alt="galaxy s8"></a>
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <a href="">
      <img src="img/carrosel/x.jpg" alt="iphone x"></a>
      <div class="carousel-caption">
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
    <span><i class="far fa-caret-square-left fa-3x"></i></span>
  </a>
  <a class="carousel-control-next" href="#carousel" data-slide="next">
    <span><i class="far fa-caret-square-right fa-3x"></i></span>
  </a>
</div>

<?php 
  include "categorias.inc";
 ?> 

