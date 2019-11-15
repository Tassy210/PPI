
<?php 

session_start(); 
 if (! $_SESSION["email"]) {
header("location:pagina.php");
}
?>

<!DOCTYPE html>
  <html>
    <head >
    <meta charset="utf8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
    	
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, options);
    
    </script>
            

      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

     
<nav>
    <div class="nav-wrapper">
    
      <a href="#" class="logo-container"><img src="logo.png" height="54px"  margin-left: "80px" margin-top:"3px"></a>

   
      
  
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="login.php"> Sair </a></li>
      </ul>

      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="Perfil.php">Perfil</a></li>
      </ul>
      
    </div>
  </nav>


  

<div class="parallax-container">
  <div class="parallax"><img src="paisagem.png" height="1024px" width="1310px">
</div>
<h3>Mas o que é o acervo histórico IFFAR-FW/CAFW?<br><br></h3>
<h6>É um acervo virtual onde suas lembranças mais queridas são guardadas e arquivadas na internet.
 Permitindo que você interaja com as postagens ou até mesmo poste algo com a autorização dos administradores.
  O sistema o possbilita fazer postagens, invreentar seu próprio perfil, fazer comentários, fazer seu feedback
   em qualquer postagem ou denunciala.</h6>
<br>
<br>
Nova Publicação
<a class="btn-floating btn-large waves-effect waves-light red" href="publica.php"><i class="material-icons" >add</i> </a>

<?php 
include "formulario.php";
$sql="SELECT * FROM postagens";
$result=mysqli_query( $conexao,$sql);

$sql2="SELECT * FROM imagem";

$result2=mysqli_query( $conexao,$sql2);


echo "<center> <div>";
foreach($result as $postagens){
	echo " ";
  
    echo"".$postagens['texto']."<br>";
   
    echo"".$postagens['data']."<br>";
    echo "";

    foreach($result2 as $imagem){
      if($imagem['id_post'] == $postagens['id']){
   
        
        echo"<img src='".$imagem['imagem']."' ><br>";
      }
    }

    echo "</div> </center>";

    echo "";

}

echo "";


?>

<?php
 



 



 ?>

<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
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
</body>
  </html>