<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


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
      <a href="home.php" class="logo-container"><img src="logo.png" height="54px"  margin-left: "80px" margin-top:"3px"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="#">Login</a></li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="cadastro.php">Cadastrar</a></li>
      </ul>
    </div>
  </nav>

<br>
      <div class="container">
      <div class="container">
      <div class="card">
        <div class="card-image">
        </div>
        <div class="container">
        <div class="card-content">
        <div class="card-content">
          <center>
          <h5>Preencha os campos abaixo: </h5>  
          <img src="icon_user.png" width="54px">
          </center>
          <form>
          <label>Nome: 
          <input type="text" name="nome" placeholder="Digite seu nome">
          </label>
          <br>
          <label>Senha: 
          <input type="password" name="senha" placeholder="Digite sua senha">
          </label>
          <br><br>
          <center>
          <button class="btn waves-effect waves-default center-align " style="background-color: #8fd149" type="submit" name="submit" >Logar
          <i class="material-icons">done</i></button>
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