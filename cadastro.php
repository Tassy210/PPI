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
      <li><a href="#">Cadastrar</a></li>
      </ul>
    </div>
  </nav>

<div class="container">
 <div class="container">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
        </div>
        <div class="container">
        <div class="card-content">
          <center>
          <img src="icon_user.png" width="54px">
          </center>
          <form>
            <label>Nome:   </label>
          <input type="text" name="nome" placeholder="Digte seu nome">
            <label>Email:  </label>
          <input type="email" name="mail" placeholder="Digte seu email">
            <label>Senha:   </label>
          <input type="password" name="senha" placeholder="Digte sua senha">
          <p>
            <label>Indique seu sexo: </label>
            <br><br>
            <label>
            <input name="group1" type="radio" checked />
            <span>Masculino</span>
            </label>
            <label>
            <input name="group1" type="radio" />
            <span>Feminino</span>
            </label>
          </p>
          <br>
          <div class="file-field input-field">
          <div class="btn">
              <span>Arquivo</span>
              <input id="foto" name="arquivo" autocomplete="false" type="file">
          </div>
              <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
          </div>
          <br>
          <button type="submit" name="submit" class="btn waves-effect waves-light center-align" >Enviar
        </form>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
  </div>

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