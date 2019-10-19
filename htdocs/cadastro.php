<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <title>ACCIO</title>
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/style.css">
    <script>
    var request = new XMLHttpRequest(); 
  var endPoint = 'https://bdjson-18d93.firebaseio.com/agenda/agenda.json'; 
  request.open('GET', endPoint, true);
  request.onload = function(){
    var data= JSON.parse(request.responseText);
     document.getElementById('nomecompleto').value=("");
    } 
    request.send();
   </script>
  
</head>
    <a href="index.php"><header class="btn btn-warning" style="width: 100%;">
  
      <img class="logo" src="css/LOGO.png" alt="logo"> 
</header></a>
<body style="background-image:url(fundo2.jpg);">

  <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" method="post" action="cad.php">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Informações de Contato</li>
                <li>Informações de Envio e Cobrança</li>
                <li>Informações do Usuário</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Informações de Contato</h2>
                <input type="text" placeholder="Nome Completo" name="nome">
                <input type="email" placeholder="Email" name="email">
                <input type="number" min='0' placeholder="Telefone Fixo" name="telefoneFixo">
                <input type="number" min='0' placeholder="Celular" name="telefoneCel">
                <input type="button" name="next" class="next action-button" value="Próximo" />
            </fieldset>

            <fieldset  method="get" action=".">
                <h2 class="fs-title">Informações de Envio e Cobrança</h2>
                <input type="number" min='0' placeholder="CEP" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
               onblur="pesquisacep(this.value);">
                <input type="text" placeholder="Estado" name="estado" id="estado">
                <input type="text" placeholder="Endereço" name="endereco" id="endereco">
                <input type="text" placeholder="Cidade" name="cidade" id="cidade">
                <input type="text" placeholder="Bairro" name="bairro" id="bairro">
                <input type="text" placeholder="Número" name="numero" id="numero">
                <input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
                <input type="button" name="next" class="next action-button" value="Próximo"/>
                
            </fieldset>
            
            <fieldset>
                <h2 class="fs-title">Informações do Usuário</h2>
                <input type="date"  placeholder="Data de Nascimento" name="dataNasc">
                <input type="number" min='0' placeholder="CPF" name="cpf">
                <input type="text"  placeholder="Nome de Usuário" name="usuario">
                <input type="password"  placeholder="Senha" id="senha" name="senha">
                <input type="password"  placeholder="Comfirme sua Senha" onblur="conf()" id="csenha" name="consenha">
                <input type="button" name="previous" class="previous action-button-previous" value="Voltar"/>
                <input type="submit" name="submit" class="submit action-button" value="Cadastrar"/>
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
        <div class="dme_link">
            <p><a data-toggle="modal" data-target="#myModal" href="#">Já sou Cadastrado</a></p>
        </div>
        <?php
          include "login.php";
        ?>
    </div>
</div>

            <script>
		function conf(){
		senha = document.getElementById("senha").value;
		csenha = document.getElementById("csenha").value;
		if (senha != csenha){
			alert("as senhas não conferem!");
			document.getElementById("senha").value = "";
			document.getElementById("csenha").value = "";
			document.getElementById("senha").focus();

		}
	}
	</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

  
    <script  src="js/index.js"></script>


</body>

</html>
