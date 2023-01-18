<?php
	session_start();
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "descobrindo_portugal";
	$db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

	// initialize variables
	$nome = "";
  $distrito = "";
	$concelho = "";
	$descricao = "";
  $imagem = "";
	$id = 0;
	$update = false;

  //if click button
  if (isset($_POST['save'])) {
	$nome = $_POST['nome'];
  $distrito = $_POST['distrito'];
  $concelho = $_POST['concelho'];
  $descricao = $_POST['descricao'];
  $imagem = $_POST['imagem'];

  $query = "INSERT INTO locais (nome, distrito, concelho, descricao, imagem) VALUES ('$nome', '$distrito', '$concelho', '$descricao', '$imagem')";
  mysqli_query($db, $query);
	$_SESSION['msg'] = "Local guardado";
	header('location: admin_locais.php');
  }

  //update records

  if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$nome = $_POST['nome'];
  $distrito = $_POST['distrito'];
	$concelho = $_POST['concelho'];
	$descricao = $_POST['descricao'];
  $imagem = $_POST['imagem'];

	mysqli_query($db, "UPDATE locais SET nome='$nome', distrito='$distrito', concelho='$concelho', descricao='$descricao', imagem='$imagem' WHERE id=$id");
	$_SESSION['msg'] = "Informação atualizada.";
	header('location: admin_locais.php');
  }

  //delete records
  if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM locais WHERE id=$id");
	$_SESSION['msg'] = "Local eliminado";
	header('location: admin_locais.php');
  }

  //retrieve records
  $results = mysqli_query($db, "SELECT * FROM locais");

?>
