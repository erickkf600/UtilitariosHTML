<?php
  include "header.php";
  include "banco.php";
  include "login.php";
?>

    

      <div class="container-fluid d-flex justify-content-center mt-3">

          <?php 
     
              if(empty($_GET['p'])){
              $query = "select * from produto";     
            }else{
              $p = $_GET['p'];
              $query = "select * from produto where titulo like '%$p%' or subcategoria like '%$p%' ";
            }

              $iten = mysqli_query($con, $query);
              
              $total = mysqli_num_rows($iten);
              if($total == 0){
                echo "<h3 class='text-danger text-center mt-5' style='height:45%'>Nenhum Item encontrado!</h3>";
                   }
          ?>
            <div class="row">
                <?php while($f = mysqli_fetch_array($iten)){ 
                  $preco = $f['preco'];
                  $preco = number_format($preco, 2, ',','.');
                ?>
                <div class="col-xs-12 col-sm-12 col-md-6 mt-5 mb-5">
                    <a href="produto.php?id=<?php  echo $f['idprod']; ?>" id="link">
                      <div class="card">
                        <img class="card-img-top" src="img/produtos/<?php echo $f['img']; ?>" width="100%" alt="card image">
                        <div class="card-body">
                          <b class="card-tex"><?php echo $f['titulo']; ?></b>
                            <p class="font-weight-normal">Avista: 
                              <span class="text-center text-danger font-weight-bold">R$ <?php echo $preco ?></span></p>
                              <p class="font-italic">Ou parcele em até 6x sem juros</p>
                        </div>
                        <div class="card-footer text-center">
                          <a class="btn btn-warning">Comprar</a>
                          <button type="button" class="btn btn-outline-warning">Add Carinho 
                            <span><i class="fas fa-cart-plus"></i></span>
                          </button>
                        </div>
                      </div></a> 
                </div>
                <?php } ?>
            </div>
        </div>

        <footer><?php include "footer.inc"; ?></footer>

         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
   </body>
</html>