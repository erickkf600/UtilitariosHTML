<?php 
include "banco.php";

$query = "select * from login";

$c = mysqli_query($con, $query);

while($f = mysqli_fetch_array($c)){
  $id = $f['id'];
 ?>

 <style>
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
<div class="modal fade" id="pessoais<?php echo $f['id']; ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="content">

      <!-- Modal Header -->
      <div class="modal-header text-center">
        <h4 class="modal-title">Informações da Conta do <?php echo $f['usuario'] ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="atualizarcadastro.php">
          <div class="form-group">
            <label for="inputAddress">Nome</label>
            <input type="text" class="form-control" id="inputAddress" name="endereco" value="<?php echo $f['nome']; ?>">
          </div>
          <div class="form-row">
            <div class="form-group col-md-10">
              <label for="inputAddress">Endereço</label>
              <input type="text" class="form-control" id="inputAddress" name="endereco" value="<?php echo $f['endereco']; ?>">
            </div>

            <div class="form-group col-md-2">
              <label for="inputAddress">Número</label>
              <input type="number" min="0" class="form-control" name="numero" value="<?php echo $f['numero']; ?>">
            </div>
        </div>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputZip">CEP</label>
              <input type="text" class="form-control" id="inputZip" name="cep" value="<?php echo $f['cep']; ?>">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">Estado</label>
              <input type="text" class="form-control" name="estado" value="<?php echo $f['estado']; ?>">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">Cidade</label>
              <input type="text" class="form-control" name="cidade" value="<?php echo $f['cidade']; ?>">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">Bairro</label>
              <input type="text" class="form-control" name="bairro" value="<?php echo $f['bairro']; ?>">
            </div>
          </div>

          <button type="submit" class="btn btn-outline-danger btn-block">Atualizar Cadastro</button>
        </form>

   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
  </div>

</div>
</div>
</div>

<?php } ?>
