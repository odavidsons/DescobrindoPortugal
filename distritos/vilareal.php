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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Vila Real'");
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
          <li><a class="example_c"href="vilareal/alijo.php">Alijó</a></li>
          <li><a class="example_c"href="vilareal/boticas.php">Boticas</a></li>
          <li><a class="example_c"href="vilareal/chaves.php">Chaves</a></li>
          <li><a class="example_c"href="vilareal/mesao.php">Mesão Frio</a></li>
          <li><a class="example_c"href="vilareal/mondim.php">Mondim de Basto</a></li>
          <li><a class="example_c"href="vilareal/montalegre.php">Montalegre</a></li>
          <li><a class="example_c"href="vilareal/murca.php">Murça</a></li>
          <li><a class="example_c"href="vilareal/pesoregua.php">Peso da Régua</a></li>
          <li><a class="example_c"href="vilareal/ribeira.php">Ribeira de Pena</a></li>
          <li><a class="example_c"href="vilareal/sabrosa.php">Sabrosa</a></li>
          <li><a class="example_c"href="vilareal/santamarta.php">Santa Marta de Penaguião</a></li>
          <li><a class="example_c"href="vilareal/valpacos.php">Valpaços</a></li>
          <li><a class="example_c"href="vilareal/vilapouca.php">Vila Pouca de Aguiar</a></li>
          <li><a class="example_c"href="vilareal/vilareal.php">Vila Real</a></li>
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
