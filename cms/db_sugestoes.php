<?php
	session_start();
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "descobrindo_portugal";
	$db = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

	// initialize variables
	$utilizador = "";
  $local = "";
	$descricao = "";
	$id = 0;
	$update = false;


  //delete records
  if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM sugestoes WHERE id=$id");
	$_SESSION['msg'] = "Sugestão eliminada";
	header('location: admin_sugestoes.php');
  }

  //retrieve records
  $results = mysqli_query($db, "SELECT * FROM sugestoes");

?>
