<?php
require '../includes/conexao.php';
?>
<?php
require 'db_concelhos.php';
?>
<!DOCTYPE php>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="../includes/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Admin Panel</title>
  </head>
  <body>
    <div class="full-height" style="background-image: url(https://sylviayano.files.wordpress.com/2015/08/image79.jpg);background-size: cover;background-position: center;">
    <?php include_once('header3.php'); ?>

    <h1>Bem vindo ao painel administrador</h1>
    <h1>Escolha uma opção</h1>
    <div style="width:50%; margin:0 auto; text-align: center;">
      <a href="admin.php">
      <button class="btn">Modificar distritos</button>
      </a>
      <a href="admin_concelhos.php">
      <button class="btn">Modificar Concelhos</button>
    </a><br><br>
      <a href="admin_locais.php">
      <button class="btn">Modificar Locais</button>
      </a>
      <a href="admin_sugestoes.php">
      <button class="btn">Ver sugestões</button>
      </a>
    </div>
    </div>
    <?php include_once('../footer.php'); ?>
  </body>
</html>
