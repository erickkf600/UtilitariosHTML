<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Entre com a sua conta</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <?php 
                if(isset($_GET['idprod'])){
                    $id = $_GET['idprod'];
                    $link = "resposta.php?idprod=$id";
                    }else{
                        $link = "resposta.php";
                    }
             ?>
            <form method="post" action="<?php echo $link; ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input autofocus required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha">
                    </div>
                    <button type="submit" class="btn btn-dark btn-block">Login</button>
                    <label class="mt-3">
                        <input type="checkbox" name="conectar"> Manter Conectado
                    </label>
                </div>
            </form>

            <div class="modal-footer">
                <a class="dropdown-item" href="#">Esqueci a senha</a>
                <br>
                <br><a class="dropdown-item btn btn-dark active" href="cadastro.php">Cadastrar-se</a>
                
            </div>
        </div>
    </div>
</div>