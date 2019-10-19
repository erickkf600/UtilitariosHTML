<?php
  include "header.php"
?>
<style>
  
.contact-form, .contact-add-box {
    background-color: #c1c1c1;
    margin-bottom: 30px;
    padding: 30px;
    border-radius: 15px;
}
.contact-section h4 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #af0808;
    font-weight: 600;
    text-transform: capitalize;
}
 .form-control {
    height: 45px;
    border: 1px solid #242424;
    border-radius: 0px;
    font-size: 16px;
    color: #242424;
    padding: 0 10px 0 20px;
}
.contact-form textarea.form-control {
    height: 140px;
    resize: inherit;
    border-radius: 0px;
}
.comment-box {
    color: #fff;
    font-size: 16px;
    line-height: 1.5em;
    font-weight: 500;
    text-transform: capitalize;
}
/* Contact Add Box  */
.address-details {margin-top:45px;margin-bottom:45px;}
.contact-add-box ul {
    list-style:none;
    font-size:15px;
    font-weight:500;
    line-height:25px;
}
.contact-add-box i { 
    color: #af0808;
    padding-right:10px;
}

/* Social Icons */
.social-icons {margin:48px 0px 48px 0px ;}
.social-icons i{
    margin-right: 10px;
    padding: 0px;
    font-size:35px;
    color:#323232;
    box-shadow: 0 0 3px rgba(0, 0, 0, .2);
    
}
.social-icons li {margin:0px;padding:0;display:inline-block;}

#social-fb:hover {
     color: #3B5998;
     transition:all .001s;
 }
 #social-tw:hover {
     color: #4099FF;
     transition:all .001s;
 }
 #social-gp:hover {
     color: #d34836;
     transition:all .001s;
 }
 #social-em:hover {
     color: #f39c12;
     transition:all .001s;
 }


</style>
<div id="myTab" class="nav-pills nav justify-content-center scrollmenu">
  <a href="perfil.php" class="tablink">
    <i class="fas fa-user-circle fa-lg"></i> MINHA CONTA
  </a>
  <a href="pedidos.php" class="tablink">
    <i class="fas fa-archive fa-lg"></i> MEUS PEDIDOS
  </a>
  <a href="contato.php" class="tablink">
    <i class="fas fa-exclamation-triangle fa-lg"></i> INFORMAR PROBLEMAS
  </a>
  <a href="config.php" class="tablink">
    <i class="fas fa-cog fa-lg"></i> CONFIGURAÇÕES
  </a>
  <a href="destroys.php" class="tablink">
    <i class="fas fa-sign-out-alt fa-lg"></i> SAIR
  </a>
</div>
<!-- menu mobile -->
<div id="myTab2" class="nav-pills nav justify-content-center scrollmenu">
  <a href="perfil.php" class="tablink">
    <i class="fas fa-user-circle fa-lg"></i>
  </a>
  <a href="pedidos.php" class="tablink">
    <i class="fas fa-archive fa-lg"></i>
  </a>
  <a href="contato.php" class="tablink">
    <i class="fas fa-exclamation-triangle fa-lg"></i>
  </a>
  <a href="config.php" class="tablink">
    <i class="fas fa-cog fa-lg"></i>
  </a>
  <a href="destroys.php" class="tablink">
    <i class="fas fa-sign-out-alt fa-lg"></i>
  </a>
</div>
<div class="contact-section">
  <div class="container-fluid col-sm-12 d-flex justify-content-center">
    <div class="row">
      <div class="col-md-8 col-sm-12 mt-5">
        <div class="contact-form">
          <form method="post" action="">
            <h4>Informe seus dados</h4>
            <div class="row">
              <div class="form-group service-form-group col-md-12">
                <label class="control-label sr-only" for="name"></label>
                <input name="nome" type="text" placeholder="Nome" class="form-control" required>
                </div>
                <div class="form-group service-form-group col-md-12">
                  <label class="control-label sr-only" for="email"></label>
                  <input name="email" type="email" placeholder="Email" class="form-control" required="">
                  </div>
                  <div class="form-group service-form-group col-md-12">
                    <label class="control-label sr-only" for="phone"></label>
                    <input name="celular" type="number" min="0" placeholder="Telefone" class="form-control" required="">
                    </div>
                    <div class="form-group service-form-group col-md-12">
                      <label class="control-label sr-only"></label>
                      <input name="assunto" type="text" placeholder="Assunto" class="form-control" required>
                      </div>
                      <div class="form-group col-md-12">
                        <label class="control-label sr-only" for="select"></label>
                        <div class="select">
                          <select name="tipo" name="select" class="form-control">
                            <option disabled selected>Tipo de Contato</option>
                            <option value="problemas na compra">Problemas com minha compra</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="reclamacao">Reclamação</option>
                            <option value="elogio">Elogios</option>
                            <option value="duvida">Dúvidas</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <textarea class="form-control" id="textarea" name="textarea" placeholder="Digite sua Mensagem"></textarea>
                      </div>
                      <div class="col-md-12 text-xs-right">
                        <button class="inputButton" type="submit">ENVIAR</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-4 col-sm-12 mt-5">
                <div class="contact-add-box">
                  <h4>Nos ajude a te ajudar</h4>
                  <p>Estamos prontos para ouvir suas necessidades e esclarecer quaisquer duvidas.</p>
                    <p>Horário de atendimento: 09:00 às 19:00 de segunda à sexta-feira, horário de Brasília (exceto feriados)</p>

                  <div class="social-icons">
                    <div style="font-size:4em;">
                      <i class="far fa-address-book"></i>
                      <i class="fas fa-question"></i>
                      <i class="fas fa-comments"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
