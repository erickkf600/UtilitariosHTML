<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #000;
    color: white;
    padding: 15px 121px;
    font-size: 16px;
    border: none;
    cursor: pointer;

}

.dropdown {
    position: relative;
    display: inline-block;

}

.dropdown-content {
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;

}

.dropdown-content a {
    color: black;
    padding: 20px 16px;
    text-decoration: none;
    text-align: center;
    display: block;

}

.dropdown-content a:hover {
  background-color: #f1f1f1;
   

}

.dropdown:hover .dropdown-content {
    display: block;


}
</style>
</head>
<body>

<div class="menu">
  <div>
   <button class="btn btn-dark btn-lg" type="button" data-toggle="modal" data-target="#catagorias">Categoria</button>
    <div class="modal fade" id="catagorias">
    <div class="modal-dialog">
      <div class="modal-content">

      	<div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

         <div class="modal-body">

      		<a href="celulares.php"><button class="btn btn-default btn-lg btn-block ">Smartphones</button></a>
      		<a href="informatica.php"><button class="btn btn-default btn-lg btn-block">Informática</button></a>
      		<a href="eletronicos.php"><button class="btn btn-default btn-lg btn-block">Eletrônicos</button></a>
      		<a href="games.php"><button class="btn btn-default btn-lg btn-block">Games</button></a>
          <a href="livros.php"><button class="btn btn-default btn-lg btn-block">Livros</button></a>
     		  <a href="moda.php"><button class="btn btn-default btn-lg btn-block">Moda</button></a>

        </div>
        
      </div>
    </div>
  </div>
        
  </div>
  </div>
</body>
</html>

