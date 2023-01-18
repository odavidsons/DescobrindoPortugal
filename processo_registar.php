<?php
session_start();
$utilizador = "";
$email    = "";
$errors = array();

include_once 'includes/conexao.php';

if (isset($_POST['registo'])) {

  $utilizador = mysqli_real_escape_string($con, $_POST['utilizador']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $password_repeat = mysqli_real_escape_string($con, $_POST['password_repeat']);


  if (empty($utilizador)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $password_repeat) {
	array_push($errors, "The two passwords do not match");
  echo "<script type='text/javascript'>alert('As passwords não correspondem');
  document.location='login.php'</script>";
  }

  $user_check_query = "SELECT * FROM dados_login WHERE utilizador='$utilizador' OR email='$email' LIMIT 1";
 $result = mysqli_query($con, $user_check_query);
 $user = mysqli_fetch_assoc($result);

 if ($user) {
   if ($user['utilizador'] === $utilizador) {
     array_push($errors, "Username already exists");
     echo "<script type='text/javascript'>alert('Esse utilizador já existe');
     document.location='login.php'</script>";
   }

   if ($user['email'] === $email) {
     array_push($errors, "email already exists");
     echo "<script type='text/javascript'>alert('Esse email já está associado');
     document.location='login.php'</script>";
   }

 }

 if (count($errors) == 0) {
   	$password = ($password);

   	$query = "INSERT INTO dados_login (utilizador, password, email)
   			  VALUES('$utilizador', '$password', '$email')";
   	mysqli_query($con, $query);
   	$_SESSION['utilizador'] = $utilizador;
   	$_SESSION['success'] = "You are now logged in";
   	header('location: login.php');
   }
 }
?>
