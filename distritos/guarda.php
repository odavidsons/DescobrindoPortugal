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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Guarda'");
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
          <li><a class="example_c"href="guarda/aguiardabeira.php">Aguiar da Beira</a></li>
          <li><a class="example_c"href="guarda/almeida.php">Almeida</a></li>
          <li><a class="example_c"href="guarda/celoricodabeira.php">Celorico da Beira</a></li>
          <li><a class="example_c"href="guarda/fiueiradecastelorodrigo.php">Figueira de Castelo Rodrigo</a></li>
          <li><a class="example_c"href="guarda/fornosdealgodres.php">Fornos de Algodres</a></li>
          <li><a class="example_c"href="guarda/gouveia.php">Gouveia</a></li>
          <li><a class="example_c"href="guarda/guarda.php">Guarda</a></li>
          <li><a class="example_c"href="guarda/manteigas.php">Manteigas</a></li>
          <li><a class="example_c"href="guarda/meda.php">Mêda</a></li>
          <li><a class="example_c"href="guarda/pinhel.php">Pinhel</a></li>
          <li><a class="example_c"href="guarda/sabugal.php">Sabugal</a></li>
          <li><a class="example_c"href="guarda/seia.php">Seia</a></li>
          <li><a class="example_c"href="guarda/trancoso.php">Trancoso</a></li>
          <li><a class="example_c"href="guarda/vilanovadefozcoa.php">Vila Nova de Foz Côa</a></li>
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
