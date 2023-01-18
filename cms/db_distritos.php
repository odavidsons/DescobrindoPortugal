<?php
	session_start();
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "descobrindo_portugal";
	$db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

	// initialize variables
	$distrito = "";
	$descricao = "";
  $imagem = "";
	$id = 0;
	$update = false;

  //if click button
  if (isset($_POST['save'])) {
  $distrito = $_POST['distrito'];
  $descricao = $_POST['descricao'];
  $imagem = $_POST['imagem'];

  $query = "INSERT INTO distritos (distrito, descricao, imagem) VALUES ('$distrito', '$descricao', '$imagem')";
  mysqli_query($db, $query);
	$_SESSION['msg'] = "Distrito guardado";
	header('location: admin.php');
  }

  //update records

  if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$distrito = $_POST['distrito'];
	$descricao = $_POST['descricao'];
  $imagem = $_POST['imagem'];

	mysqli_query($db, "UPDATE distritos SET distrito='$distrito', descricao='$descricao', imagem='$imagem' WHERE id=$id");
	$_SESSION['msg'] = "Informação atualizada.";
	header('location: admin.php');
  }

  //delete records
  if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM distritos WHERE id=$id");
	$_SESSION['msg'] = "Distrito eliminado";
	header('location: admin.php');
  }

  //retrieve records
  $results = mysqli_query($db, "SELECT * FROM distritos");

?>
