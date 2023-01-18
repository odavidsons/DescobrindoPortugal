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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Acores'");
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
          <li><a class="example_c"href="acores/angra.php">Angra do Heroísmo</a></li>
          <li><a class="example_c"href="acores/calheta.php">Calheta</a></li>
          <li><a class="example_c"href="acores/corvo.php">Corvo</a></li>
          <li><a class="example_c"href="acores/horta.php">Horta</a></li>
          <li><a class="example_c"href="acores/lagoa.php">Lagoa</a></li>
          <li><a class="example_c"href="acores/lajesflores.php">Lajes das Flores</a></li>
          <li><a class="example_c"href="acores/lajespico.php">Lajes do Pico</a></li>
          <li><a class="example_c"href="acores/madalena.php">Madalena</a></li>
          <li><a class="example_c"href="acores/nordeste.php">Nordeste</a></li>
          <li><a class="example_c"href="acores/ponta.php">Ponta Delgada</a></li>
          <li><a class="example_c"href="acores/povoacao.php">Povoação</a></li>
          <li><a class="example_c"href="acores/praia.php">Praia da Vitória</a></li>
          <li><a class="example_c"href="acores/ribeira.php">Ribeira Grande</a></li>
          <li><a class="example_c"href="acores/santacruzflores.php">Santa Cruz das Flores</a></li>
          <li><a class="example_c"href="acores/santacruzgraciosa.php">Santa Cruz da Graciosa</a></li>
          <li><a class="example_c"href="acores/saoroque.php">São Roque do Pico</a></li>
          <li><a class="example_c"href="acores/velas.php">Velas</a></li>
          <li><a class="example_c"href="acores/viladoporto.php">Vila do Porto</a></li>
          <li><a class="example_c"href="acores/vilafrancadocampo.php">Vila Franca do Campo</a></li>
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
