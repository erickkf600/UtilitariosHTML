   <?php 
      include "header.php";
   ?>

    <div id="myTab" class="nav-pills nav justify-content-center scrollmenu">

        <a href="perfil.php" class="tablink"><i class="fas fa-user-circle fa-lg"></i> MINHA CONTA</a>
        <a href="pedidos.php" class="tablink"><i class="fas fa-archive fa-lg"></i> MEUS PEDIDOS</a>
        <a href="problemas.php" class="tablink"><i class="fas fa-exclamation-triangle fa-lg"></i> INFORMAR PROBLEMAS</a>
        <a href="config.php" class="tablink"><i class="fas fa-cog fa-lg"></i> CONFIGURAÇÕES</a>
        <a href="destroys.php" class="tablink"><i class="fas fa-sign-out-alt fa-lg"></i> SAIR</a>

    </div>

    <!-- menu mobile -->

    <div id="myTab2" class="nav-pills nav justify-content-center scrollmenu">

        <a href="perfil.php" class="tablink"><i class="fas fa-user-circle fa-lg"></i></a>
        <a href="pedidos.php" class="tablink"><i class="fas fa-archive fa-lg"></i></a>
        <a href="problemas.php" class="tablink"><i class="fas fa-exclamation-triangle fa-lg"></i></a>
        <a href="config.php" class="tablink"><i class="fas fa-cog fa-lg"></i></a>
        <a href="destroys.php" class="tablink"><i class="fas fa-sign-out-alt fa-lg"></i></a>

    </div>
    <h2 class="cont ml-3 mt-3">Configurações da Conta</h2>
    <hr>

    <div class="container-fluid">
    <div class="row col-md-12">
        <div class="col-lg-4">
            <div class="card" style="margin:50px 0">
                <!-- Default panel contents -->
                <div class="card-header">Gerais</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Vincular com outras contas
                        <label class="switch">
                            <input checked type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Pais
                        <label class="switch col-md-5 ">
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option value="Alemanha">Alemanha</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Austrália">Austrália</option>
                            <option value="Brasil" selected>Brasil</option>
                            <option value="Canadá">Canadá</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="EUA">EUA</option>
                            <option value="Espanha">Espanha</option>
                            <option value="Portugal">Portugal</option>
                          </select>
                        </label>
                    </li>
                    <li class="list-group-item">Exibir Comentários
                        <label class="switch ">
                            <input checked type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Tipo de Perfil
                        <label class="float-right">
                            <input type="radio" name="gender" value="male" checked> Pessoa Fisica
                            <input type="radio" name="gender" value="female"> Pessoa Juridica 
                        </label>
                    </li>
                    <li class="list-group-item">Anônimo
                        <label class="switch ">
                            <input type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">E-mail Privado
                        <label class="switch ">
                            <input checked type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card" style="margin:50px 0">
                <!-- Default panel contents -->
                <div class="card-header">Notificações</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Novidades
                        <label class="switch ">
                            <input checked type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Promoções
                        <label class="switch ">
                            <input type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Alerta de preço
                        <label class="switch ">
                            <input type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Receber e-mails semanais
                        <label class="switch ">
                            <input checked type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Alerta sobre logins não reconhecidos
                        <label class="switch ">
                            <input checked type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Atividade nos meus comentários
                        <label class="switch ">
                            <input type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card" style="margin:50px 0">
                <!-- Default panel contents -->
                <div class="card-header">Segurança</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Manter Conectado
                        <label class="switch ">
                            <input checked type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Autenticação de dois fatores
                        <label class="switch ">
                            <input type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Salvar método de pagamento
                        <label class="switch ">
                            <input checked type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Enviar confirmação de login por e-mail
                        <label class="switch ">
                            <input checked type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">Solicitar uma senha de pagamento
                        <label class="switch ">
                            <input type="checkbox" class="check"> <span class="slide round"></span>
                        </label>
                    </li>
                    <li class="list-group-item">
                        <button class="float-right btn btn-outline-danger">Excluir Conta</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>   
          <div class="text-center">
             <input type="submit" value="Salvar Configurações" class="inputButton2">
          </div>
</div>


    <hr>
    </div>
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