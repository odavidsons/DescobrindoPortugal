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
  $rec = mysqli_query($db, "SELECT * FROM distritos WHERE distrito='Setubal'");
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
          <li><a class="example_c"href="setubal/alcacer.php">Alcácer do Sal</a></li>
          <li><a class="example_c"href="setubal/alcochete.php">Alcochete</a></li>
          <li><a class="example_c"href="setubal/almada.php">Almada</a></li>
          <li><a class="example_c"href="setubal/barreiro.php">Barreiro</a></li>
          <li><a class="example_c"href="setubal/grandola.php">Grândola</a></li>
          <li><a class="example_c"href="setubal/moita.php">Moita</a></li>
          <li><a class="example_c"href="setubal/montijo.php">Montijo</a></li>
          <li><a class="example_c"href="setubal/palmela.php">Palmela</a></li>
          <li><a class="example_c"href="setubal/santiago.php">Santiago do Cacém</a></li>
          <li><a class="example_c"href="setubal/seixal.php">Seixal</a></li>
          <li><a class="example_c"href="setubal/sesimbra.php">Sesimbra</a></li>
          <li><a class="example_c"href="setubal/setubal.php">Setúbal</a></li>
          <li><a class="example_c"href="setubal/sines.php">Sines</a></li>
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
