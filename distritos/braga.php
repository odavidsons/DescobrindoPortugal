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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Braga'");
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
          <li><a class="example_c"href="braga/amares.php">Amares</a></li>
          <li><a class="example_c"href="braga/barcelos.php">Barcelos</a></li>
          <li><a class="example_c"href="braga/braga.php">Braga</a></li>
          <li><a class="example_c"href="braga/cabeceirasdebasto.php">Cabeceiras de Basto</a></li>
          <li><a class="example_c"href="braga/celoricodebasto.php">Celorico de Basto</a></li>
          <li><a class="example_c"href="braga/esposende.php">Esposende</a></li>
          <li><a class="example_c"href="braga/fafe.php">Fafe</a></li>
          <li><a class="example_c"href="braga/guimaraes.php">Guimarães</a></li>
          <li><a class="example_c"href="braga/povoadelanhoso.php">Póvoa de Lanhoso</a></li>
          <li><a class="example_c"href="braga/terrasdebouro.php">Terras de Bouro</a></li>
          <li><a class="example_c"href="braga/vieiradominho.php">Vieira do Minho</a></li>
          <li><a class="example_c"href="braga/vilanovadefamalicao.php">Vila Nova de Famalicão</a></li>
          <li><a class="example_c"href="braga/vilaverde.php">Vila Verde</a></li>
          <li><a class="example_c"href="braga/vizela.php">Vizela</a></li>
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
