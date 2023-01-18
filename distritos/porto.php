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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Porto'");
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
        <img src="../../<?php echo $record['imagem']; ?>" alt="" width="100%">
      </div>
      <div class="concelhos" style="width: 50%; height: 100%; float: left;">
      <h2>Concelhos</h2><br>
        <ol type="1">
          <li><a class="example_c"href="porto/amarante.php">Amarantes</a></li>
          <li><a class="example_c"href="porto/baiao.php">Baião</a></li>
          <li><a class="example_c"href="porto/felgueira.php">Felgueiras</a></li>
          <li><a class="example_c"href="porto/gondomar.php">Gondomar</a></li>
          <li><a class="example_c"href="porto/lousada.php">Lousada</a></li>
          <li><a class="example_c"href="porto/maia.php">Maia</a></li>
          <li><a class="example_c"href="porto/marcocanaveses.php">Marco de Canaveses</a></li>
          <li><a class="example_c"href="porto/matosinhos.php">Matosinhos</a></li>
          <li><a class="example_c"href="porto/pacosferreira.php">Paços de Ferreira</a></li>
          <li><a class="example_c"href="porto/paredes.php">Paredes</a></li>
          <li><a class="example_c"href="porto/penafiel.php">Penafiel</a></li>
          <li><a class="example_c"href="porto/porto.php">Porto</a></li>
          <li><a class="example_c"href="porto/povoa.php">Póvoa de Varzim</a></li>
          <li><a class="example_c"href="porto/santotirso.php">Santo Tirso</a></li>
          <li><a class="example_c"href="porto/trofa.php">Trofa</a></li>
          <li><a class="example_c"href="porto/valongo.php">Valongo</a></li>
          <li><a class="example_c"href="porto/vilaconde.php">Vila do Conde</a></li>
          <li><a class="example_c"href="porto/vilanovagaia.php">Vila Nova de Gaia</a></li>
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
