<?php
require 'includes/conexao.php';
?>
<!DOCTYPE php>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="includes/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Bem Vindo</title>
  </head>
  <body>
    <?php include_once('header.php'); ?>
    <div class="wrapper">
      <div class="index_images">
        <div class="imagens_frontpage selectt">
          <div class="limite">
            <a href="mapa.php"><img src="includes/images/mapa1.jpg" alt=""> </a>
            <div class="centered">Mapa</div>
          </div>
        </div>
        <div class="imagens_frontpage selectt">
          <div class="limite">
            <a href="regioes.php"> <img src="includes/images/pesquisar.jpg" alt=""> </a>
            <div class="centered">Locais</div>
          </div>
        </div>
        <div class="imagens_frontpage selectt">
          <div class="limite">
            <a href="projeto.php"> <img src="includes/images/projeto.jpg" alt=""> </a>
            <div class="centered">Projeto</div>
          </div>
        </div>
      </div>
      <br> <h1>Bem vindo ao nosso website</h1><br>
    </div>
    <?php include_once('footer.php'); ?>
  </body>
</html>
