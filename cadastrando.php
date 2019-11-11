<?php

include "formulario.php";
mysqli_set_charset($conexao,"utf8");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST ['senha'];

$sql = "insert into usuarios  (nome, email, senha) values ('$nome'  , '$email', '$senha') " ;


$query = mysqli_query($conexao, $sql );

if ($query){

	header("location:principal.php");
}
else{
	echo "Erro ao inserir registro." . mysqli_error($conexao);
}

mysqli_close($conexao);
?> 

