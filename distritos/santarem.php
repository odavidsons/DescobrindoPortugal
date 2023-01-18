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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Santarem'");
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
          <li><a class="example_c"href="santarem/abrantes.php">Abrantes</a></li>
          <li><a class="example_c"href="santarem/alcanena.php">Alcanena</a></li>
          <li><a class="example_c"href="santarem/almeirim.php">Almeirim</a></li>
          <li><a class="example_c"href="santarem/alpiarca.php">Alpiarça</a></li>
          <li><a class="example_c"href="santarem/benavente.php">Benavente</a></li>
          <li><a class="example_c"href="santarem/cartaxo.php">Cartaxo</a></li>
          <li><a class="example_c"href="santarem/chamusca.php">Chamusca</a></li>
          <li><a class="example_c"href="santarem/constancia.php">Constância</a></li>
          <li><a class="example_c"href="santarem/coruche.php">Coruche</a></li>
          <li><a class="example_c"href="santarem/entroncamento.php">Entroncamento</a></li>
          <li><a class="example_c"href="santarem/ferreira.php">Ferreira do Zêzere</a></li>
          <li><a class="example_c"href="santarem/golega.php">Golegã</a></li>
          <li><a class="example_c"href="santarem/macao.php">Mação</a></li>
          <li><a class="example_c"href="santarem/ourem.php">Ourém</a></li>
          <li><a class="example_c"href="santarem/riomaior.php">Rio Maior</a></li>
          <li><a class="example_c"href="santarem/salvaterra.php">Salvaterra de Magos</a></li>
          <li><a class="example_c"href="santarem/santarem.php">Santarém</a></li>
          <li><a class="example_c"href="santarem/sardoal.php">Sardoal</a></li>
          <li><a class="example_c"href="santarem/tomar.php">Tomar</a></li>
          <li><a class="example_c"href="santarem/torresnovas.php">Torres Novas</a></li>
          <li><a class="example_c"href="santarem/vilanova.php">Vila Nova da Barquinha</a></li>
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
