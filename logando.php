<?php 

   session_start();
   include_once "formulario.php";
   $email = $_POST["email"];
   $senha = $_POST["senha"];
   
  if(empty($email) or empty($senha)){
    $_SESSION['ERROS'] = "Campos não podem se nulos";
   	header("location:login.php");
   	exit();

   }	else{ 
      $email = mysqli_escape_string($conexao,$email);
       $senha  = mysqli_escape_string($conexao,$senha);
        $query = "SELECT * from usuarios where email = '{$email}' and senha = '{$senha}'";
       
       
        $result = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($result);
       $user=mysqli_fetch_array($result); 
        
   if ($row == 1){
      $_SESSION['email'] = $email;
        $_SESSION['usuario'] = $user['id'];
      
     	header('location:pagina.php'); 
     
     
   }else{
   
   $_SESSION['ERROS'] = "Email ou Senha incorretos";
   header('location:login.php');
   
   }
 }

 ?>