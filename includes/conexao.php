<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "descobrindo_portugal";

$con = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if (mysqli_connect_errno())
  {
  echo "Falha na conexao a base de dados: " . mysqli_connect_error();
  }
?>
