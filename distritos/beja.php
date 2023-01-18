<?php
require '../includes/conexao.php';
?>
<?php
require '../cms/db_distritos.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Viana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="../includes/distritos.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php include_once('header2.php'); ?>
  <?php
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Beja'");
  $record = mysqli_fetch_array($rec);
  $distrito = $record['distrito'];
  $descricao = $record['descricao'];
  $imagem = $record['imagem'];
  $id = $record['id'];
  ?>
  <div id="conteudo">
    <?php $results = mysqli_query($db, "SELECT * FROM distritos"); ?>
    <h1> <?php echo $record['distrito']; ?> </h1>
    <p> <?php echo $record['descricao']; ?> </p><br><br>
    <div style="width: 100%;">
      <div class="imagens" style="float: right; width: 40%; height: 100%;">
        <img src="../images/<?php echo $record['imagem']; ?>" alt="" width="100%">
      </div>
      <div class="concelhos" style="width: 50%; height: 100%; float: left;">
      <h2>Concelhos</h2><br>
        <ol type="1">
          <li><a class="example_c" href="beja/aljustrel.php">Aljustrel</a></li>
          <li><a class="example_c" href="beja/almodovar.php">Almodôvar</a></li>
          <li><a class="example_c" href="beja/alvito.php">Alvito</a></li>
          <li><a class="example_c" href="beja/barrancos.php">Barrancos</a></li>
          <li><a class="example_c" href="beja/beja.php">Beja</a></li>
          <li><a class="example_c" href="beja/castroverde.php">Castro Verde</a></li>
          <li><a class="example_c" href="beja/cuba.php">Cuba</a></li>
          <li><a class="example_c" href="beja/ferreiradoalentejo.php">Ferreiro do Alentejo</a></li>
          <li><a class="example_c" href="beja/mertola.php">Mértola</a></li>
          <li><a class="example_c" href="beja/moura.php">Moura</a></li>
          <li><a class="example_c" href="beja/odemira.php">Odemira</a></li>
          <li><a class="example_c" href="beja/ourique.php">Ourique</a></li>
          <li><a class="example_c" href="beja/serpa.php">Serpa</a></li>
          <li><a class="example_c" href="beja/vidigueira.php">Vidigueira</a></li>
        </ol>
        <br><br><br><br><br><br>
        <ol>
          <li><a class="voltar" href="../mapa.php">Voltar</a></li>
        </ol>
      </div>
    </div>
  </div>

</body>
</html>
