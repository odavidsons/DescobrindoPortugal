<?php
session_start();

include('includes/conexao.php');

if(isset($_POST['dados_login']));
{
    $user_unsafe=$_POST['utilizador'];
    $pass_unsafe=$_POST['password'];

    $user = mysqli_real_escape_string($con,$user_unsafe);
    $pass = mysqli_real_escape_string($con,$pass_unsafe);

    $query=mysqli_query($con,"select * from dados_login where utilizador='$user' and password='$pass'")or die(mysqli_error($con));

    $row=mysqli_fetch_array($query);

         $name=$row['utilizador'];
         $admin=$row['admin'];
         $counter=mysqli_num_rows($query);
         $id=$row['id'];

         if ($counter == 0)
         {
            echo "<script type='text/javascript'>alert('Password ou utilizador inválido!');
            document.location='login.php'</script>";
            $_SESSION['logged_in'] = false;
         }
         else
         {
            $_SESSION['id']=$id;
            $_SESSION['utilizador']=$name;
            $_SESSION['admin']=$admin;
            $_SESSION['logged_in'] = true;

            if ($_SESSION['admin'] == 1) {
              echo "<script type='text/javascript'>document.location='cms/admin_inicio.php'</script>";
            }else{
            echo "<script type='text/javascript'>document.location='index.php'</script>";
          }
         }

}

?>
