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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Aveiro'");
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
          <li><a class="example_c"href="aveiro/agueda.php">Águeda</a></li>
          <li><a class="example_c"href="aveiro/albergaria.php">Albergaria-a-Velha</a></li>
          <li><a class="example_c"href="aveiro/anadia.php">Anadia</a></li>
          <li><a class="example_c"href="aveiro/arouca.php">Arouca</a></li>
          <li><a class="example_c"href="aveiro/aveiro.php">Aveiro</a></li>
          <li><a class="example_c"href="aveiro/castelodepaiva.php">Castelo de Paiva</a></li>
          <li><a class="example_c"href="aveiro/espinho.php">Espinho</a></li>
          <li><a class="example_c"href="aveiro/estarreja.php">Estarreja</a></li>
          <li><a class="example_c"href="aveiro/ilhavo.php">Ílhavo</a></li>
          <li><a class="example_c"href="aveiro/mealhada.php">Mealhada</a></li>
          <li><a class="example_c"href="aveiro/murtosa.php">Murtosa</a></li>
          <li><a class="example_c"href="aveiro/oliveiradeazemeis.php">Oliveira de Azeméis</a></li>
          <li><a class="example_c"href="aveiro/oliveiradobairro.php">Oliveira do Bairro</a></li>
          <li><a class="example_c"href="aveiro/ovar.php">Ovar</a></li>
          <li><a class="example_c"href="aveiro/santamariadafeira.php">Santa Maria da Feira</a></li>
          <li><a class="example_c"href="aveiro/saojoaodamadeira.php">São Jõao da Madeira</a></li>
          <li><a class="example_c"href="aveiro/severdovouga.php">Sever do Vouga</a></li>
          <li><a class="example_c"href="aveiro/vagos.php">Vagos</a></li>
          <li><a class="example_c"href="aveiro/valedecambra.php">Vale de Cambra</a></li>
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
