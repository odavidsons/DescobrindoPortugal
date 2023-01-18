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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Lisboa'");
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
        <img src="<?php echo $record['imagem']; ?>" alt="" width="100%">
      </div>
      <div class="concelhos" style="width: 50%; height: 100%; float: left;">
      <h2>Concelhos</h2><br>
        <ol type="1">
          <li><a class="example_c"href="lisboa/alenquer.php">Alenquer</a></li>
          <li><a class="example_c"href="lisboa/amadora.php">Amadora</a></li>
          <li><a class="example_c"href="lisboa/arrudavinhos.php">Arruda dos Vinhos</a></li>
          <li><a class="example_c"href="lisboa/azambuja.php">Azambuja</a></li>
          <li><a class="example_c"href="lisboa/cadaval.php">Cadaval</a></li>
          <li><a class="example_c"href="lisboa/cascais.php">Cascais</a></li>
          <li><a class="example_c"href="lisboa/lisboa.php">Lisboa</a></li>
          <li><a class="example_c"href="lisboa/loures.php">Loures</a></li>
          <li><a class="example_c"href="lisboa/lourinha.php">Lourinhã</a></li>
          <li><a class="example_c"href="lisboa/mafra.php">Mafra</a></li>
          <li><a class="example_c"href="lisboa/odivelas.php">Odivelas</a></li>
          <li><a class="example_c"href="lisboa/oeiras.php">Oeiras</a></li>
          <li><a class="example_c"href="lisboa/sintra.php">Sintra</a></li>
          <li><a class="example_c"href="lisboa/sobral.php">Sobral</a></li>
          <li><a class="example_c"href="lisboa/torresvedras.php">Torres Vedras</a></li>
          <li><a class="example_c"href="lisboa/vilafranca.php">Vila Franca de Xira</a></li>
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
