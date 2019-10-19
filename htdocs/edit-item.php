<?php 
  include "banco.php";

  $query = "select * from produto";

  $c = mysqli_query($con, $query);

  while($f = mysqli_fetch_array($c)){
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
    <div class="modal fade" id="edit<?php echo $f['codigo']; ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Editar</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                   <form method="post" action="edit-item2.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputAddress" id="label">Título do Anúncio</label>
                    <input type="text" value="<?php echo $f['titulo']; ?>" name="titulo" class="form-control">
                </div>
                <div class="form-row mt-4">
                    <div class="col-md-4">
                        <label for="inputAddress" id="label">Código ID</label>
                        <input type="number" value="<?php echo $f['codigo']; ?>" min="0" name="codigo" class="form-control" >
                    </div>

                    <div class="form-group col-md-4">
                        <label id="label">Categoria</label>
                        <select name="categoria" class="form-control">
                            <option disabled selected><?php echo $f['categoria']; ?></option>
                            <option value="informatica">Informática</option>
                            <option value="eletronicos">Eletrônicos</option>
                            <option value="games">Games</option>
                            <option value="leitura">Leitura</option>
                            <option value="vestuario">Vestuário</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label id="label">Sub-Categoria</label>
                        <select   name="subcategoria" class="form-control">
                            <option  disabled selected><?php echo $f['subcategoria']; ?></option>
                            <!-- Informática -->
                            <option value="hardwere">Hardwere</option>
                            <option value="perifericos">Perifericos</option>
                            <option value="computadores">Computadores</option>
                            <option value="notebooks">Notebooks</option>
                            <option value="acessorios">Acessorios</option>

                            <!-- Eletrônicos -->
                            <option value="samartphones">Smartphones</option>
                            <option value="smartwaches">Smartwaches</option>
                            <option value="drones">Drones</option>
                            <option value="componentes">Componentes</option>

                            <!-- Games -->
                            <option value="consoles">Consoles</option>
                            <option value="jogos">Jogos</option>
                            <option value="acessorios-games">Acessórios</option>

                            <!-- Leitura -->
                            <option value="hqs">HQs</option>
                            <option value="mangas">Mangás</option>
                            <option value="livros">Livros</option>
                            <option value="ebooks">E-books</option>

                            <!-- Vestuário -->
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="calcados">Calçados</option>
                            <option value="acessorios-vest">Acessórios</option>
                        </select>
                    </div>

                </div>

                <div class="form-row mt-4">
                    <div class="col-md-4">
                        <label for="inputAddress" id="label">Preço</label>
                        <input name="preco" type="text" value="<?php echo $f['preco']; ?>" class="form-control" >
                    </div>
                    <div class="col-md-4">
                        <label for="inputAddress" id="label">Quantidade em Estoque</label>
                        <input name="estoque" value="<?php echo $f['estoque']; ?>" type="number" min="0" class="form-control" >
                    </div>
                </div>

                <label id="label">Detalhes</label>
                  <small class="form-text text-muted mb-2">Descrevra todas as caracteristicas do produto.</small>
                    <textarea rows="5" name="detalhes" id="edit"><?php echo $f['detalhes']; ?></textarea>

                <label  id="label">Conteudo</label>
                  <small class="form-text text-muted mb-2">Descrevra os itens inclusos com o produto.</small>
                    <textarea rows="5" name="conteudo" id="edit2"><?php echo $f['conteudo']; ?></textarea>


                    <div class="col-md-4 mt-5">
                    <label for="foto">Adicionar Foto</label>
                    <input type="file" name="foto" accept="image/jpeg, image/png, image/jpg"  multiple/>
                </div>

                <div class="text-center">
                    <input type="submit" value="Editar Dados" class="inputButton">
                </div>
            </form>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>

    </div>

    <?php } ?>


  