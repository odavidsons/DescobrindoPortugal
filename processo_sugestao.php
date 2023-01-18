<?php
$utilizador = "";
$local    = "";
$descricao = "";
$errors = array();

include_once 'includes/conexao.php';

if (isset($_POST['enviar'])) {

  $utilizador = mysqli_real_escape_string($con, $_POST['utilizador']);
  $local = mysqli_real_escape_string($con, $_POST['local']);
  $descricao = mysqli_real_escape_string($con, $_POST['descricao']);


  if (empty($utilizador)) { array_push($errors, "Introduza o seu nome"); }
  if (empty($local)) { array_push($errors, "Introduza o nome do local"); }
  if (empty($descricao)) { array_push($errors, "Descrição necessária"); }


 if (count($errors) == 0) {

   	$query = "INSERT INTO sugestoes (utilizador, local, descricao)
   			  VALUES('$utilizador', '$local', '$descricao')";
   	mysqli_query($con, $query);
   	header('location: sugestoes.php');
   }
 }
?>
