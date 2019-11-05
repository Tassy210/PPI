<html>
<meta charset="utf-8">
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
      <a href="pagina.php" class="logo-container"><img src="logo.png" height="54px"  margin-left: "80px" margin-top:"3px"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="#">Login</a></li>
      </ul>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="cadastro.php">Cadastrar</a></li>
      </ul>
    </div>
  </nav>

<center>
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

        <form method="POST" action="logando.php">
	       <div class="">
        	<br><br><br><br>
            E-mail: 
         	<br>
            <input name="email" type="email">
        	<br><br><br>
            Senha: 
        	<br>
                    <input name="senha" type="password">

        <br><br><br>

<button class="btn waves-effect waves-default center-align " style="background-color: #8fd149" type="submit" name="submit" >Logar
          <i class="material-icons">done</i></button>

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
<center>

</body>
</html>