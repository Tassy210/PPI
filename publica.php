<?php 

session_start(); 
include "formulario.php";

if (!isset($_SESSION["email"])) {
header("location:login.php");
}

$sql = "select * from postagens where id=".$_SESSION['usuario'];
$query= mysqli_query($conexao, $sql);
$user = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
  <html>
  <title>Perfil</title>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<head>
<style>

body{
background-color:#baffc2;
}

 .nav-wrapper  {
background-color: #8fd149;
font-size: 32px;
font-weight: bold;
opacity:0.925;
}
</style>

</head>
<body>


<br><br>
  <div class="container">
  <div class="container">
  <div class="card">
    <div class="card-image">
    </div>
    <div class="container">
    <div class="card-content">
    <div class="card-content">
      <center>
        
      <nav>

  <li><a href="home.php">Voltar para a pagina inicial</a></li>
  </ul>


</nav>
      <h5>Preencha os campos abaixo: </h5>
      

<h3>Insira os dados da sua postagem</h3>
		
    <div class="inp">

    <br><br>
    <form method="POST" action="pub.php" enctype="multipart/form-data">
    Texto
    <br>
    <input type="text" name="texto" value="">
    <br><br><br>
   
			<input type="file" name="imagem" id="imagem" onchange="previewImagem()"><br><br>
			<img style="width: 150px; height: 150px;" ><br><br>
    

    <div class="file-field input-field">
    <div class="btn">
    <span>Arquivo</span>
              <i class="material-icons">cloud_upload</i>
              <input id="foto" name="arquivo" autocomplete="false" type="file" >
          </div>
              <div class="file-path-wrapper">
          </div>
        </div>
          <br><br>
          <center>
          <button type="submit" name="submit" class="btn waves-effect waves-default center-align" style="background-color: #8fd149" >publicar<i class="material-icons">send</i></button>
          </center>
        </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>


</div>

<div class="traco"></div>


<footer class="nav-wrapper">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text" style="font-size:16px;">Desenvolvido por: </h5>
            <p class="grey-text text-lighten-4" style="font-size:14px;">Leon Tassinari, Lucas Rabaioli, Valentina Camargo, Gustavo Bottega</p>
          </div>
        </div>
      </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script>
			function previewImagem(){
				var imagem = document.querySelector('input[name=imagem]').files[0];
				var preview = document.querySelector('img');
				
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(imagem){
					reader.readAsDataURL(imagem);
				}else{
					preview.src = "";
				}
			}
		</script>


</body>
  </html>