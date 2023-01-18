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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Coimbra'");
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
          <li><a class="example_c"href="coimbra/arganil.php">Arganil</a></li>
          <li><a class="example_c"href="coimbra/castanhede.php">Castanhede</a></li>
          <li><a class="example_c"href="coimbra/coimbra.php">Coimbra</a></li>
          <li><a class="example_c"href="coimbra/condeixaanova.php">Condeixa-a-Nova</a></li>
          <li><a class="example_c"href="coimbra/figueiradafoz.php">Figueira da Foz</a></li>
          <li><a class="example_c"href="coimbra/gois.php">Góis</a></li>
          <li><a class="example_c"href="coimbra/lousa.php">Lousã</a></li>
          <li><a class="example_c"href="coimbra/mira.php">Mira</a></li>
          <li><a class="example_c"href="coimbra/mirandadocorvo.php">Miranda do Corvo</a></li>
          <li><a class="example_c"href="coimbra/montemorovelho.php">Montemor-o-Velho</a></li>
          <li><a class="example_c"href="coimbra/oliveiradohospital.php">Oliveira do Hospital</a></li>
          <li><a class="example_c"href="coimbra/pampilhosadaserra.php">Pampilhosa da Serra</a></li>
          <li><a class="example_c"href="coimbra/penacova.php">Penacova</a></li>
          <li><a class="example_c"href="coimbra/penela.php">Penela</a></li>
          <li><a class="example_c"href="coimbra/soure.php">Soure</a></li>
          <li><a class="example_c"href="coimbra/tabua.php">Tábua</a></li>
          <li><a class="example_c"href="coimbra/vilanovadepoaires.php">Vila Nova de Poiares</a></li>
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
