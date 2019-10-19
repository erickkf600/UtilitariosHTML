<?php
   include "header.php";
   include "banco.php";
   $id = $_GET['id'];
   $busca = "SELECT * FROM produto WHERE idprod='$id'";
   $contect = mysqli_query($con, $busca);
   $total = mysqli_num_rows($contect);
   ?>
   <style>
       #parc{
        font-size: 16px;
        letter-spacing:2px;
        font-family: 'IBM Plex Mono', monospace;
       }
       #content {
        margin-left: -25%;
        width: 150%;
    }
    
    @media only screen and (max-width: 1024px) {
        #content {
            margin: auto;
            width: 100%;
        }
    }
   </style>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb" style="background-color: #e5e5e5">
      <li class="breadcrumb-item"><a href="index.php" class="text-dark">Inicio</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-dark">Informática</a></li>
      <li class="breadcrumb-item"><a href="#" class="text-dark">Computadores</a></li>
      <li class="breadcrumb-item active" aria-current="page" class="text-dark">Item</li>
   </ol>
</nav>
<?php while($f = mysqli_fetch_array($contect)){
   $preco2 = $f['preco'];
   $preco = $f['preco'];
   $preco = number_format($preco, 2, ',','.');
   ?>
<div class="container" id="cont0">
   <div class="row">
      <!-- galeris de Imagens -->
      <div class="col-md-7">
         <section class="gallery">
            <div class="carousel">
               <input type="radio" id="image1" name="gallery-control" checked>
               <input type="radio" id="image2" name="gallery-control">
               <input type="radio" id="image3" name="gallery-control">
               <input type="radio" id="image4" name="gallery-control">
               <input type="checkbox" id="fullscreen" name="gallery-fullscreen-control">
               <div class="wrap mt-4">
                  <figure>
                     <label for="fullscreen">
                     <img src="img/produtos/<?php echo $f['img']; ?>" alt="image1">
                     </label>
                  </figure>
               </div>
               <div class="thumbnails">
                  <div class="slider">
                     <div class="indicator"></div>
                  </div>
                  <label for="image1" class="thumb" style="background-image: url(img/produtos/<?php echo $f['img']; ?>)"></label>
               </div>
            </div>
         </section>
      </div>
      <div class="col-md-5 mt-3" style="border:0px solid gray">
         <!-- Datos del vendedor y titulo del producto -->
         <h3>
            <?php echo $f['titulo']; ?>
         </h3>
         <p><span class="font-weight-bold">Código:</span> (
            <?php echo $f['codigo']; ?>)
         </p>
         <!-- Precios -->
         <h6 class="title-price"><small>A VISTA</small></h6>
         <h3 class="text-danger" style="margin-top:0px;">R$
            <?php  echo $preco; ?>
         </h3>
         <a data-toggle="modal" data-target="#parcela" class="btn btn-light mt-2 mb-4" style="background: #c1c1c1;">VER PARCELAS</a>
         <!-- Detalles especificos del producto -->
         <div class="form-group col-md-4">
            <label for="exampleFormControlSelect1">Cor:</label>
            <select required class="form-control" id="exampleFormControlSelect1">
               <option>Branco</option>
               <option>Preto</option>
               <option>Vermelho</option>
            </select>
         </div>
         <div class="form-group col-md-4">
            <label for="exampleInputPassword1">Quantidade:</label>
            <input min="1" type="number" class="form-control" id="exampleInputNumber1" value="1">
         </div>
         <!-- Botones de compra -->
         <div class="section" style="padding-bottom:20px;">
            <a href="checkout.php?idprod=<?php  echo $f['idprod']; ?>" class="btn btn-warning btn-block">Comprar</a>
            <a href="carrinho.php?idprod=<?php  echo $f['idprod']; ?>" class="btn btn-outline-warning btn-block mt-2">Add Carinho <span><i class="fas fa-cart-plus"></i></span>
            </a>
         </div>
      </div>
      <ul class="nav nav-tabs" role="tablist">
         <li class="nav-item">
            <a class="nav-link active text-dark" data-toggle="tab" href="#home">Detalhes</a>
         </li>
         <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#menu1">Conteudo da Caixa</a>
         </li>
         <li class="nav-item">
            <a class="nav-link text-dark" data-toggle="tab" href="#menu2">Envio</a>
         </li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
         <div id="home" class="container tab-pane active">
            <br>
            <?php echo $f['detalhes']; ?>
         </div>
         <div id="menu1" class="tab-pane fade pb-5 mr-5" style="padding:15px; font-size: 18px;">
            <h3>Descrição do Conteudo Incluso na Embalagem</h3>
            <ul>
               <?php echo $f['conteudo']; ?>
            </ul>
         </div>
         <div id="menu2" class="container tab-pane fade pb-5">
            <br>
            <h3>Insira o CEP do endereço que deseja receber o produto.</h3>
            <p style="font-size: 16px;">Assim você poderá calcular o frete e conhecer os serviços disponíveis.</p>
            <div class="form-group col-md-3">
               <input min="0" type="number" class="form-control" id="cep" placeholder="_ _ _ _ _ - _ _ _">
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="parcela">
   <div class="modal-dialog">
      <div class="modal-content" id="content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">PARCELAS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body text-center">
          <?php 
            for($f = 1;$f<=12;$f++){
                $val = $preco2/$f;
                $val = number_format($val, 2, ',','.');
                echo "<p id='parc'>Parcele em  $f vezes de <span><b>R$ $val</b></sapn></p>";
                echo "<hr>";
                if($f >= 10){
                    $preco2 = $preco2 * 1.05;
                }
            } 

        ?> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">FECHAR</button>
        </div>
        
      </div>
    </div>
</div>
<?php }?>
<hr>
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