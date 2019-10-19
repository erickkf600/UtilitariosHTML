<?php 
  include "banco.php";
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
 ?>
   <body style="background-color: #efefef;">
      <div>
         <?php
            include "carrosel.inc";
            ?>
      </div>
   </div>  
      </head>
      <body>       

         <hr class="bg-danger" style="height:1px">
         <div class="container mt-4 mb-5">
            <div class="row">
               <div class="col-md-12 text-center text-danger">
                  <h2 class="font-weight-bold" style="font-family: 'Orbitron', sans-serif; ">NOVIDADES</h2>
               </div>
            </div>
         </div> 
         <!--  slides -->
         <div class="container-fluid col-sm-10">
            <div class="row-equal">
               <div class="owl-carousel owl-theme">
                <?php
                  $resultado = "select * from produto limit 6";
                  $iten = mysqli_query($con, $resultado);
                   while($f = mysqli_fetch_array($iten)){ 
                  $preco = $f['preco'];
                  $preco = number_format($preco, 2, ',','.');
                ?>
                  <div >
                    <a href="produto.php?id=<?php  echo $f['idprod']; ?>" id="link">
                      <div class="card" style="width: 22rem;">
                        <img class="card-img-top" src="img/produtos/<?php echo $f['img']; ?>"  width="100%" alt="card image">
                        <div class="card-body">
                            <b class="card-title"><?php echo $f['titulo']; ?></b>
                             <p class="font-weight-normal">Avista: 
                              <span class="text-center text-danger font-weight-bold">R$ <?php echo $preco ?></span></p>
                              <p class="font-italic">Ou parcele em até 6x sem juros</p>
                        </div>
                        <div class="card-footer text-center" id="cardfoot">      
                            <a class="btn btn-warning">Comprar</a>
                            <a href="carrinho.php?idprod=<?php  echo $f['idprod']; ?>"><button type="button" class="btn btn-outline-warning">Add Carinho 
                              <span><i class="fas fa-cart-plus"></i></span>
                          </button></a>
                        </div>
                      </div>
                  </div>
                <?php } ?>
               </div>
            </div>
         </div>

         <hr style="box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.4);">
         <div class="container text-center">  
         <div class="row sm-8 mt-4" id="prop">
            <iframe src="img/promocao/accio.gif" width="990" height="164" frameBorder="0"></iframe>
         </div>
         </div>

                <hr>
         <div class="container mt-4">
            <div class="row">
               <div class="col-md-12 text-center text-danger">
                  <h2 class="font-weight-bold" style="font-family: 'Orbitron', sans-serif; ">MELHORES OFERTAS</h2>
               </div>
            </div>
         </div>
                <hr>  

         <div class="container text-center mt-3">
            <div class="tz-gallery"> 

        <div class="row md-12">
            <div class="col-md-4 mt-3">
              <a href="produto.php" id="link"><div class="card">
                <img src="img/catalogo/530.jpg" alt="gabinete" class="card-img-top">
                  <div class="card-body">
                    <h3>Gabinete NZXT Phantom 530</h3>
                    <p>CA-PH530-W1 - Branco</p>
                    <h5>Avista: <span class="text-center text-danger">R$ 750,00</span></h5>
                    <p>Ou parcele em até 6x sem juros</p></a>
                    <a class="btn btn-warning btn-sm">Comprar</a>
                    <button type="button" class="btn btn-outline-warning btn-sm">Add Carinho <span><i class="fas fa-cart-plus"></i></span></button>
                  </div>
                </div>
            </div>
             
            <div class="col-md-4  mt-3">
                <div class="card">
                  <img src="img/catalogo/530.jpg" alt="gabinete" class="card-img-top">
                    <div class="card-body">
                      <h3>Gabinete NZXT Phantom 530</h3>
                      <p>CA-PH530-W1 - Branco</p>
                      <h5>Avista: <span class="text-center text-danger">R$ 750,00</span></h5>
                    <p>Ou parcele em até 6x sem juros</p>
                    <a class="btn btn-warning btn-sm">Comprar</a>
                    <button type="button" class="btn btn-outline-warning btn-sm">Add Carinho <span><i class="fas fa-cart-plus"></i></span></button>
                    </div>
                  </div>
            </div>
             
            <div class="col-md-4 mt-3">
              <div class="card">
                <img src="img/catalogo/530.jpg" alt="gabinete" class="card-img-top">
                  <div class="card-body">
                    <h3>Gabinete NZXT Phantom 530</h3>
                    <p>CA-PH530-W1 - Branco</p>
                    <h5>Avista: <span class="text-center text-danger">R$ 750,00</span></h5>
                    <p>Ou parcele em até 6x sem juros</p>
                    <a class="btn btn-warning btn-sm">Comprar</a>
                    <button type="button" class="btn btn-outline-warning btn-sm">Add Carinho <span><i class="fas fa-cart-plus"></i></span></button>
                  </div>
                </div>
            </div>
        </div>

        <div class="row md-3">

            <div class="col-md-4 mt-3">
              <div class="card">
                <img src="img/catalogo/530.jpg" alt="gabinete" class="card-img-top">
                  <div class="card-body">
                    <h3>Gabinete NZXT Phantom 530</h3>
                    <p>CA-PH530-W1 - Branco</p>
                    <h5>Avista: <span class="text-center text-danger">R$ 750,00</span></h5>
                    <p>Ou parcele em até 6x sem juros</p>
                    <a class="btn btn-warning btn-sm">Comprar</a>
                    <button type="button" class="btn btn-outline-warning btn-sm">Add Carinho <span><i class="fas fa-cart-plus"></i></span></button>
                  </div>
                </div>
            </div>

             <div class="col-md-4 mt-3">
              <div class="card">
                <img src="img/catalogo/530.jpg" alt="gabinete" class="card-img-top">
                  <div class="card-body">
                    <h3>Gabinete NZXT Phantom 530</h3>
                    <p>CA-PH530-W1 - Branco</p>
                    <h5>Avista: <span class="text-center text-danger">R$ 750,00</span></h5>
                    <p>Ou parcele em até 6x sem juros</p>
                    <a class="btn btn-warning btn-sm">Comprar</a>
                    <button type="button" class="btn btn-outline-warning btn-sm">Add Carinho <span><i class="fas fa-cart-plus"></i></span></button>
                  </div>
                </div>
            </div>

             <div class="col-md-4 mt-3">
              <div class="card">
                <img src="img/catalogo/530.jpg" alt="gabinete" class="card-img-top">
                  <div class="card-body">
                    <h3>Gabinete NZXT Phantom 530</h3>
                    <p>CA-PH530-W1 - Branco</p>
                    <h5>Avista: <span class="text-center text-danger">R$ 750,00</span></h5>
                    <p>Ou parcele em até 6x sem juros</p>
                    <a class="btn btn-warning btn-sm">Comprar</a>
                    <button type="button" class="btn btn-outline-warning btn-sm">Add Carinho <span><i class="fas fa-cart-plus"></i></span></button>
                  </div>
                </div>
            </div>

         </div>

        </div> 
        </div><!--fechar container-->

         <hr style="box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.4);">

      <div class="container" id="logo">
      <div class="row">
          <div class="owl-carousel1" id="marcas">
            <img class="owl-lazy" src="img/marcas/lg.jpg" alt="lg"  style="border-radius: 9%">
            <img class="owl-lazy" src="img/marcas/apple.jpg" alt="apple" style="border-radius: 9%">
            <img class="owl-lazy" src="img/marcas/samsung.jpg" alt="samsung" style="border-radius: 9%">
            <img class="owl-lazy" src="img/marcas/lenovo.jpg" alt="lenovo" style="border-radius: 9%">
            <img class="owl-lazy" src="img/marcas/asus.jpg" alt="asus" style="border-radius: 9%">
            <img class="owl-lazy" src="img/marcas/sony.jpg" alt="sony" style="border-radius: 9%">
            <img class="owl-lazy" src="img/marcas/acer.jpg" alt="acer" style="border-radius: 9%">
            <img class="owl-lazy" src="img/marcas/dell.jpg" alt="dell" style="border-radius: 9%">
            <img class="owl-lazy" src="img/marcas/xiomi.jpg" alt="xiomi" style="border-radius: 9%">
            <img class="owl-lazy" src="img/marcas/oneplus.jpg" alt="one plus" style="border-radius: 9%">
          </div>    
      </div>
    </div>  
   </body>
</html>