<?php 
  include "banco.php";

  $query = "select * from funcionarios";

  $c = mysqli_query($con, $query);

  while($f = mysqli_fetch_array($c)){
    $id = $f['codigo'];
    $foto = $f['foto'];
    $salario = $f['salario'];
    $salario = number_format($salario, 2, ',','.');
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
    <div class="modal fade" id="info<?php echo $id ?>">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Mais Informações</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <center>
                        <?php if ($foto == 0) {
                          echo "<img src='img/funcionarios/user.png' width='150' class='rounded-0 mb-3' id='user'>";
                        }else{
                      echo "<img src='img/funcionarios/$foto'  width='150' class='rounded-0 mb-3' id='user'>";  
                        }
                      ?>      
                        <h2 class="media-heading"><?php echo $f['nome']; ?></h2>
                        <span><b style="font-size: 20px;">Status: </b></span>
                        <span class="badge badge-success" style="font-size: 15px;">Ativo</span>
                    </center>
                    <a href="" data-toggle="modal" data-target="#change" class="btn btn-outline-dark">Alterar Foto <i class="far fa-edit"></i></a>

                    <hr>
                    <center>
                      <p class="text-left"><b style="font-size: 20px;">Informações:</b>
                        <div class="container">
                          <table class="table table-hover">
                            <tr>
                              <td class="font-weight-bold">Email</td>
                                <td>
                                  <?php echo $f['email']; ?>
                                </td>
                              </tr>

                              <tr>
                                <td class="font-weight-bold">Nome de Usuário</td>
                                  <td>
                                    <?php echo $f['usuario']; ?>
                                  </td>
                                </tr>

                                <tr>
                                  <td class="font-weight-bold">Nascimento</td>
                                    <td>
                                      <?php echo date('d/m/Y', strtotime($f['nascimento'])); ?>
                                    </td>
                                </tr>

                                <tr>
                                  <td class="font-weight-bold">Estado Civil</td>
                                    <td>
                                      <?php echo $f['estadocivil']; ?>
                                    </td>
                                </tr>

                                <tr>
                                  <td class="font-weight-bold">CPF</td>
                                    <td>
                                      <?php echo $f['cpf']; ?>
                                    </td>
                                </tr>

                                 <tr>
                                    <td class="font-weight-bold">RG</td>
                                      <td>
                                        <?php echo $f['rg']; ?>
                                      </td>
                                  </tr>

                                  <tr>
                                    <td class="font-weight-bold">PIS</td>
                                      <td>
                                        <?php echo $f['pis']; ?>
                                      </td>
                                  </tr>

                                  <tr>
                                    <td class="font-weight-bold">Telefones</td>
                                      <td>
                                        <p>Celular 1:
                                          <?php echo $f['celular1']; ?>
                                        </p>
                                        <p class="mt-2">Celular 2:
                                          <?php echo $f['celular2']; ?>
                                        </p>
                                        <p class="mt-2">Fixo:
                                          <?php echo $f['telfixo']; ?>
                                        </p>
                                      </td>
                                  </tr>

                                  <tr>
                                    <td class="font-weight-bold">Localização</td>
                                      <td>
                                        <p>CEP:
                                          <?php echo $f['cep']; ?>
                                        </p>

                                        <p>Estado:
                                          <?php echo $f['estado']; ?>
                                        </p>

                                        <p>Cidade:
                                          <?php echo $f['cidade']; ?>
                                        </p>

                                        <p>Bairro:
                                          <?php echo $f['bairro']; ?>
                                        </p>
                                        
                                        <p>Endereço:
                                          <?php echo $f['endereco']; ?>
                                        </p>
                                        
                                        <p>Número:
                                          <?php echo $f['numero']; ?>
                                        </p>
                                      </td>
                                    </tr>


                                    <tr>
                                      <td class="font-weight-bold">Data da Contratação</td>
                                        <td>
                                          <?php echo date('d/m/Y', strtotime($f['datacont'])); ?>
                                        </td>   
                                    </tr>

                                    
                                    <tr>
                                      <td class="font-weight-bold">Setor</td>
                                        <td>
                                          <?php echo $f['setor']; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td class="font-weight-bold">Salário</td>
                                        <td>R$:
                                          <?php echo $salario ?>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td class="font-weight-bold">Carga Horaria Semanal</td>
                                        <td>
                                          <?php echo $f['cargahoraria']; ?> Horas 
                                        </td>
                                    </tr>

                                    <tr>
                                      <td class="font-weight-bold">Conta Bancaria</td>
                                        <td>
                                          <p>Agência:
                                            <?php echo $f['agencia']; ?>
                                          </p>
                                      
                                          <p>Tipo de Conta:
                                            <?php echo $f['tipoconta']; ?>
                                          </p>
                                      
                                          <p>Número da conta:
                                            <?php echo $f['numconta']; ?>
                                          </p>
                                        </td>
                                   </tr>
                          </table>
                        </div>
                    </center>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>

    </div>

    <?php } ?>





        <!-- Mudar Foto -->
        <div class="modal fade" id="change">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Faça upload das fotos do item</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="upfunc.php" enctype="multipart/form-data" method="post">
                            <input required type="file" name="arquivo" accept="image/jpeg, image/png" multiple />
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary">Upload</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>