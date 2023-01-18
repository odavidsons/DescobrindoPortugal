<?php
	session_start();
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "descobrindo_portugal";
	$db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

	// initialize variables
  $distrito = "";
	$concelho = "";
	$descricao = "";
  $imagem = "";
	$id = 0;
	$update = false;

  //if click button
  if (isset($_POST['save'])) {
  $distrito = $_POST['distrito'];
  $concelho = $_POST['concelho'];
  $descricao = $_POST['descricao'];
  $imagem = $_POST['imagem'];

  $query = "INSERT INTO concelhos (distrito, concelho, descricao, imagem) VALUES ('$distrito', '$concelho', '$descricao', '$imagem')";
  mysqli_query($db, $query);
	$_SESSION['msg'] = "Concelho guardado";
	header('location: admin_concelhos.php');
  }

  //update records

  if (isset($_POST['update'])) {
	$id = $_POST['id'];
  $distrito = $_POST['distrito'];
	$concelho = $_POST['concelho'];
	$descricao = $_POST['descricao'];
  $imagem = $_POST['imagem'];

	mysqli_query($db, "UPDATE concelhos SET distrito='$distrito', concelho='$concelho', descricao='$descricao', imagem='$imagem' WHERE id=$id");
	$_SESSION['msg'] = "Informação atualizada.";
	header('location: admin_concelhos.php');
  }

  //delete records
  if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM concelhos WHERE id=$id");
	$_SESSION['msg'] = "Concelho eliminado";
	header('location: admin_concelhos.php');
  }

  //retrieve records
  $results = mysqli_query($db, "SELECT * FROM concelhos");

?>
