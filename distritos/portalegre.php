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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Portalegre'");
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
          <li><a class="example_c"href="portalegre/alterchao.php">Alter do Chao</a></li>
          <li><a class="example_c"href="portalegre/arronches.php">Arronches</a></li>
          <li><a class="example_c"href="portalegre/avis.php">Avis</a></li>
          <li><a class="example_c"href="portalegre/campomaior.php">Campo Maior</a></li>
          <li><a class="example_c"href="portalegre/castelovide.php">Castelo de Vide</a></li>
          <li><a class="example_c"href="portalegre/crato.php">Crato</a></li>
          <li><a class="example_c"href="portalegre/elvas.php">Elvas</a></li>
          <li><a class="example_c"href="portalegre/fronteira.php">Fronteira</a></li>
          <li><a class="example_c"href="portalegre/gaviao.php">Gaião</a></li>
          <li><a class="example_c"href="portalegre/marvao.php">Marvão</a></li>
          <li><a class="example_c"href="portalegre/monforte.php">Monforte</a></li>
          <li><a class="example_c"href="portalegre/nisa.php">Nisa</a></li>
          <li><a class="example_c"href="portalegre/pontesor.php">Ponte de Sor</a></li>
          <li><a class="example_c"href="portalegre/portalegre.php">Portalegre</a></li>
          <li><a class="example_c"href="portalegre/sousel.php">Sousel</a></li>
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
