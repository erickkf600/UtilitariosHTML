   
<?php 
include "header.php";
include "banco.php";
?>

<div class="container mt-5">
  <div class="tab-content text-center">
   <div id="cart" style="margin-bottom: 12%;">
    <br>
    <?php 
    $vt = 0;
    $qtd = 1;
    
    if(isset($_GET['idprod'])){
      if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
        $id = $_GET['idprod'];
        echo "<a class='btn btn-dark btn-block p-5' data-toggle='modal' data-target='#myModal' href='#'><b style='font-size:20px;'>Entre com sua conta primeiro!</b></a>";
        echo "<style type='text/css'>#nop{display:none;}</style>";
        echo "<style type='text/css'>#foot123{margin-top:10.8%;}</style>";
      }else{

        $id = $_GET['idprod'];
        $qtd = 1;
        $email = $_SESSION['email'];
        include "banco.php";

        $consultac = mysqli_query($con, "select * from carrinho where usuario = '$email' and idprod = $id");

        $existe = mysqli_num_rows($consultac);

        if($existe == 0){
          mysqli_query($con, "insert into carrinho (idprod, qtd, usuario) values ($id, $qtd, '$email')");
        }else{
          mysqli_query($con, "update carrinho set qtd = qtd+1 where idprod = $id and usuario = '$email'");
        }
        //header("Location: carrinho.php");
      }
    }
    ?>


    <?php  
    $email = $_SESSION['email'];
    $query = "select p.img, p.titulo, p.preco, c.qtd, c.idcarrinho, p.idprod from carrinho c, produto p where c.usuario = '$email' and c.idprod = p.idprod";
    $c = mysqli_query($con, $query);
    $total = mysqli_num_rows($c);
    if($total == 0){
      echo "<style type='text/css'>#foot123{margin-top:10.8%;}</style>";
      ?> 
      <div id="nop">
        <h3 class="mb-5">Você Tem 0 Itens em seu Carrinho</h3>
        <a href="index.php" class="btn btn-outline-danger btn-block mb-5" style="text-decoration: none;">QUE TAL IR AS COMPRAS?
          <span class="ml-3"><i class="fas fa-shopping-bag"></i></span></a>
        </div>   
        <?php }else{ ?>

        <div class="container" id="cart00">
         <table id="cart" class="table table-hover table-condensed">
          <thead>
           <tr>
            <th style="width:50%" class="text-center">PRODUTO</th>
            <th style="width:10%">PREÇO</th>
            <th style="width:8%">QUANTIDADE</th>
            <th style="width:22%" class="text-center">SUBTOTAL</th>
            <th style="width:10%">EXCLUIR</th>
          </tr>
        </thead>
        <tbody>
         <tr>
          <?php 
          while($f = mysqli_fetch_array($c)){
            $img = $f[0];
            $titulo = $f[1];
            $preco = $f[2];
            $qtd = $f[3];
            $iditem = $f[4];
            $idprod = $f[5];
        //$preco = number_format($preco, 2, ',','.');
            $st = $preco * $qtd;
         //$st = number_format($st, 2, ',','.');
            $vt = $vt + $st;

            ?>
            <td data-th="Product">
             <div class="row">
              <div class="col-md-4 hidden-xs">
               <img src="img/produtos/<?php echo $f['img']; ?>" alt="item" class="img-fluid">
             </div>
             <div class="col-md-8"><?php echo $f['titulo']; ?></h6>
             </div>
           </td>
          <td data-th="Preço">
            R$ <?php echo $preco ?>
          </td>
                  <!-- Aumentar Quantidade -->
           <td data-th="Quantidade" id="mais-menos">
            <a href="menoscar.php?idprod=<?php  echo $f['idprod']; ?>"> 
              <i class="fas fa-minus-square text-danger"></i> 
            </a>
                  <!-- Diminuir Quantidade -->
            <b class="bg-light" id="mais-menos"> <?php echo $qtd ?> </b> 
            <a href='carrinho.php?idprod=<?php  echo $f['idprod']; ?>'>
              <i class="fas fa-plus-square text-success"></i>
            </a>
          </td>
          <td data-th="Subtotal" id="mais-menos">R$ <?php echo $st; ?></td>
          <td class="actions" data-th="Exluir">
            <a href="excar.php?idprod=<?php  echo $f['idprod']; ?>"><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt fa-lg"></i></button></a>
          </td>
        </tr>
      </tbody>
      <?php } ?>
      <tr>
        <td colspan="4">
          <h5>Frete Estimado:</h5></td>
          <td class="text-right"><b>R$ 25,00</b></td>
        </tr>
        <tr>
          <td colspan="4">
            <h5>Total:</h5></td>
            <td class="text-right"><b>R$ <?php echo $vt + 25 ?></b></td>
          </tr>
          <tr>
            <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Comprando</a></td>
            <td colspan="2" class="hidden-sm-up"></td>
            <td colspan="4">
              <a href="checkout.php?idprod=<?php  echo $f['idprod']; ?>" class="btn btn-success btn-lg btn-block" ">Finalizar <i class="fa fa-angle-right "></i></a>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
    <?php } ?>
  </div>
</div>
<hr>
</div>
<footer id="foot123">
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