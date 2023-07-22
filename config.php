<?php
$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "meu banco de dados";

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

//  if($conexão->connect_errno){
//     echo  "erro";
//  }
//  else{
//     echo "conexão efetuada com sucesso";
//  }


?>