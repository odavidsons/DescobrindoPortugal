<?php

function redirect($location){


    header("Location: $location");
}



function login_user(){

if(isset($_POST['submit'])){


$email = escape_string($_POST['email']);
$password = escape_string($_POST['password']);
$hashed = hash('sha512', $password);

$query = query("SELECT * FROM users WHERE email = '{$email}' AND password = '{$hashed}' ");
confirm($query);


if(mysqli_num_rows($query) == 0){

 set_message ("Seu Nome de Usuário ou Senha está errado");

redirect("login.php");



} else{

$_SESSION['email'] = $email;
$row = mysqli_fetch_row($query);
$_SESSION['user_level']=$row[5];


if (isAdmin()) {
    redirect("adminpanel.php");
    exit();
}
redirect("formulario.php");

}

}}

function isAdmin() {
        if ( isset( $_SESSION['id'] ) && 1 == $_SESSION['admin'] ) {
            return true;
        } else {
            return false;
        }
    }




?>
